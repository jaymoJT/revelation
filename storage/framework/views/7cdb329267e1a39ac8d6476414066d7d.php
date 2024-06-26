<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="home-banner">
        <!-- <img src="<?php echo e(asset('images/banner.jpg')); ?> "/> -->
        <div class="p-5 home_banner">
                <div class="row">
                    
                    <div class="col-md-7">
                        <div class="container py-5">
                            <h1 class=" home_banner_title">Excellence defined through training.</h1>
                            <p style="color:#fff !important;">
                            By developing leaders who are equipped with Christian values and principles and who are trained in their area of calling, we hope to bring maturity to the church and alter society.
                            </p>
                        </div>
                        <div class="wrapper">
                            <button class="btn btn-secondary rounded-pill"><a href="#" style="color:#fff !important; text-decoration:none;">Join Us</a></button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        
                    </div>
                </div>
        </div>

        
</div>


<div class="secondary-stripe">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-4 column-separator text-center">
                    <h2>Apply</h2>
                    <span class="material-symbols-outlined text-body-light">edit_document</span>
                </div>
                <div class="col-md-4 column-separator text-center">
                    <h2>Countries</h2>
                    <div class="counter text-body-light" data-target="15">0 </div>
                </div>
                <div class="col-md-4 ">
                    <h2>Graduates</h2>
                    <div class="counter text-body-light" data-target="300">0 </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="accreditations">
    <div class="container">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo e(asset('img/online-class.png')); ?> " style="max-width:100% !important; border-radius:15px !important;">
                </div>
                <div class="col-md-6">
                    <p>
                    George Mathews Adam said in his book “You Can” “Leadership comes solely to those who
                    KNOW Knowledge is surely Power.
                    Which organisation can employ unqualified person? Can any hospital take consultants or
                    doctors without qualifications? Can any bank allow anyone to run its affairs without prove
                    academic qualifications or experience? Or the ministry of defence or any government?
                    Jesus said in the book of Luke chapter 16:8 For the children of this world are wiser than
                    the children of the kingdom”. Paul told Timothy in 2 Tim 16-17 “All scriptures is
                    Godbreathed and is useful for teaching rebuking, correction and training in righteousness
                    so that the man of God can be thoroughly equipped for every good work.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>











 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\leoblaze\revelation\resources\views/welcome.blade.php ENDPATH**/ ?>