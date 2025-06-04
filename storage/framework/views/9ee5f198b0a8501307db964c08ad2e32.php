<!DOCTYPE html>
<html>
<head>
    <title>Edit Event</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Edit Event</h1>
    <form method="POST" action="<?php echo e(route('events.update', $event->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>Title:</label><br>
        <input type="text" name="title" value="<?php echo e(old('title', $event->title)); ?>" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"><?php echo e(old('description', $event->description)); ?></textarea><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" value="<?php echo e(old('date', $event->date ? $event->date->format('Y-m-d') : '')); ?>" required>


        <button type="submit">Update Event</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\dhg04\Desktop\Hetvi\Websites\event-management\resources\views/events/edit.blade.php ENDPATH**/ ?>