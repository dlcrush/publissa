<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\PostRepository;
use App\Repositories\Contracts\SiteRepository;
use App\Repositories\Contracts\TagRepository;
use App\Repositories\Criteria\Expand;
use Illuminate\Http\Request;

class AppController extends Controller
{

    protected $appRepo;
    protected $postRepo;
    protected $categoryRepo;
    protected $tagRepo;

    public function __construct(SiteRepository $siteRepo, PostRepository $postRepo, CategoryRepository $categoryRepo, TagRepository $tagRepo) {
        $this->appRepo = $siteRepo;
        $this->postRepo = $postRepo;
        $this->categoryRepo = $categoryRepo;
        $this->tagRepo = $tagRepo;
    }

    public function getApps() {
        $apps = $this->appRepo->all();

        return view('apps.list', compact('apps'));
    }

    public function createApp() {
        return view('apps.create');
    }

    public function postApp(Request $request) {
        $this->validateRequest($request, true);

        $app = $this->appRepo->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'user_id' => 1
        ]);

        return redirect(action('AppController@getApps'));
    }

    public function updateAppSettings($id, Request $request) {
        $this->validateRequest($request, false);

        $app = $this->appRepo->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ], $id);

        return redirect(action('AppController@getApp', ['id' => $id]));
    }

    public function getApp($id) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.view', compact('app'));
    }

    public function getAppSettings($id) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.settings', compact('app'));
    }

    public function getAppPosts($id) {
        $this->appRepo->pushCriteria(new Expand('posts'));

        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.posts.list', compact('app'));
    }

    public function createAppPost($id, Request $request) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.posts.create', compact('app'));
    }

    public function postAppPost($id, Request $request) {
        $this->validatePostRequest($request, true);

        /*
        $this->postRepo->create([
            'title' => $request->title,
            'description' => $request->description
        ]);*/
    }

    public function getAppCategories($id) {
        $this->appRepo->pushCriteria(new Expand('categories'));

        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.categories.list', compact('app'));
    }

    public function createAppCategory($id) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.categories.create', compact('app'));
    }

    public function postAppCategory($id, Request $request) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        $this->categoryRepo->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'user_id' => 1,
            'site_id' => $app->id
        ]);

        return redirect(action('AppController@getAppCategories', ['id' => $app->id]));
    }

    public function getAppTags($id) {
        $this->appRepo->pushCriteria(new Expand('tags'));

        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.tags.list', compact('app'));
    }

    public function createAppTag($id) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        return view('apps.tags.create', compact('app'));
    }

    public function postAppTag($id, Request $request) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }

        $this->tagRepo->create([
            'name' => $request->name,
            'slug' => $request->slug,
            'user_id' => 1,
            'site_id' => $app->id
        ]);

        return redirect(action('AppController@getAppTags', ['id' => $app->id]));
    }

    public function getAppFeeds($id) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }
    }

    public function getAppNavigation($id) {
        $app = $this->appRepo->find($id);

        if (! $app) {
            return redirect(action('AppController@getApps'));
        }
    }

    private function validateRequest($request, $isNew) {
        switch($isNew) {
            case true:
                $this->validate($request, [
                   'name' => 'required',
                   'slug' => 'required|unique:sites',
                   'description' => 'required'
                ]);
                break;
            case false:
                $this->validate($request, [
                   'name' => 'required',
                   'slug' => 'required|unique:sites,id,' . $request->id,
                   'description' => 'required'
                ]);
                break;
            default:
                break;
        }
    }

    private function validatePostRequest($request, $isNew) {
        switch($isNew) {
            case true:
                $this->validate($request, [
                   'name' => 'required',
                   'slug' => 'required|unique:sites',
                   'description' => 'required'
                ]);
                break;
            case false:
                $this->validate($request, [
                   'name' => 'required',
                   'slug' => 'required|unique:sites,id,' . $request->id,
                   'description' => 'required'
                ]);
                break;
            default:
                break;
        }
    }

}
