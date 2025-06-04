<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Events List</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <div class="container">

        <!-- Hero Section -->
        <section class="hero">
            <h1>Welcome to the Events Portal</h1>
            <p>Discover and manage upcoming events with ease</p>
        </section>

        <!-- Success Message -->
        <?php if(session('success')): ?>
            <div class="success-message">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Create Event Button -->
        <a href="<?php echo e(route('events.create')); ?>" class="btn-create">Create New Event</a>

        <!-- Upcoming Events -->
        <section class="events-list">
            <h2>Upcoming Events</h2>
            <?php if($events->isEmpty()): ?>
                <p style="text-align:center; font-size: 1.2rem;">No events found. Please add some events.</p>
            <?php else: ?>
                <ul>
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div>
                                <strong><?php echo e($event->title); ?></strong> - <?php echo e(\Carbon\Carbon::parse($event->date)->format('d M, Y')); ?>

                            </div>
                            <div class="action-buttons">
                                <a href="<?php echo e(route('events.edit', $event->id)); ?>" class="btn-edit">Edit</a>

                                <form style="display:inline;" method="POST" action="<?php echo e(route('events.destroy', $event->id)); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn-delete" onclick="return confirm('Are you sure you want to delete this event?');">Delete</button>
                                </form>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </section>

        <!-- About Section -->
        <section class="about">
            <h2>About Our Event Portal</h2>
            <p>Our portal helps you seamlessly create, edit, and delete events, keeping your schedule organized and your audience informed.</p>
        </section>

        <!-- Features Section -->
<section class="features">
    <h2>Key Features</h2>
    <div class="feature-list">
        <div class="feature-item">
            <h3>Event Creation & Editing</h3>
            <p>Easily create, update, and customize event details with a user-friendly interface.</p>
        </div>
        <div class="feature-item">
            <h3>Calendar Integration</h3>
            <p>Sync events with your calendar app for seamless scheduling and reminders.</p>
        </div>
        <div class="feature-item">
            <h3>Attendee Management</h3>
            <p>Track attendees, send invitations, and manage RSVPs efficiently.</p>
        </div>
        <div class="feature-item">
            <h3>Notifications & Alerts</h3>
            <p>Get real-time notifications about upcoming events and changes.</p>
        </div>
        <div class="feature-item">
            <h3>Responsive & Mobile Friendly</h3>
            <p>Access and manage events from any device, anytime.</p>
        </div>
        <div class="feature-item">
            <h3>Secure Data Handling</h3>
            <p>Ensure privacy and security for all your event and user information.</p>
        </div>
    </div>
</section>


        <!-- Footer -->
        <footer>
            <p>&copy; <?php echo e(date('Y')); ?> Events Portal. Made by Badal Kumar Aman</p>
        </footer>
    </div>
</body>
</html>
<?php /**PATH C:\Users\dhg04\Desktop\Hetvi\Websites\event-management\resources\views/events/index.blade.php ENDPATH**/ ?>