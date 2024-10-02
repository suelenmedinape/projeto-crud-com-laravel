<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert" id="alert-box">
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>
    const alertB = document.getElementById('alert-box');
    if(alertB)
        setTimeout(()=>{
            alertB.remove();
        },5000);
    </script>