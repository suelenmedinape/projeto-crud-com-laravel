<div class="alert alert-{{ session('status')['type'] }} alert-dismissible fade show" role="alert" id="alert-box">
    {{ session('status')['message'] }}
</div>
<script>
    const alertB = document.getElementById('alert-box');
    if (alertB)
        setTimeout(() => {
            alertB.remove();
        }, 5000);
</script>