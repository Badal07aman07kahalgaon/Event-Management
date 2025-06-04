<!DOCTYPE html>
<html>
<head>
    <title>Create Event</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <h1>Create Event</h1>
    <form method="POST" action="<?php echo e(route('events.store')); ?>">
        <?php echo csrf_field(); ?>
        <label>Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" required><br><br>

        <button type="submit">Save Event</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\dhg04\Desktop\Hetvi\Websites\event-management\resources\views/events/create.blade.php ENDPATH**/ ?>