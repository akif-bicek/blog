<?php

/** @var yii\web\View $this */

$this->title = 'Yii Blog';
?>
<!--<div class="row">
    <div class="input-group justify-content-center align-items-center">
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Ara</label>
        </div>
        <button type="button" class="btn btn-lg h-100 btn-primary">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>-->
<?php if (!Yii::$app->user->isGuest): ?>
    <h4>Abonelikler</h4>
    <hr>
    <div class="row">
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
            <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
                <img
                        src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                        class="img-fluid"
                        alt="Sample"
                />
                <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <p class="text-white mb-0 ml-2">Can you see me?</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between mask">
                    <div class="d-flex flex-row align-items-end">
                        <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                        height="25" /></a>
                        <a href="" class="small mb-0 ms-2">Martha</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center mt-5">
            <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Daha fazla gör</button>
        </div>
    </div>
<?php endif; ?>
<h4 class="mt-1">Önerilenler</h4>
<hr>
<div class="row">
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 mt-3"  onclick="window.location = '/dsadsa'">
        <div class="bg-image ripple rounded-5 shadow-4-strong" style="cursor: pointer">
            <img
                    src="https://mdbcdn.b-cdn.net/img/new/standard/city/053.webp"
                    class="img-fluid"
                    alt="Sample"
            />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0 ml-2">Can you see me?</p>
                </div>
            </div>
            <div class="d-flex justify-content-between mask">
                <div class="d-flex flex-row align-items-end">
                    <a href=""><img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="25"
                                    height="25" /></a>
                    <a href="" class="small mb-0 ms-2">Martha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-5">
        <button type="button" class="btn btn-outline-primary" data-mdb-ripple-color="dark">Daha fazla gör</button>
    </div>
</div>