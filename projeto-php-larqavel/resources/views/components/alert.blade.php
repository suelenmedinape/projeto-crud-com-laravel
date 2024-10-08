<div class="alert alert-{{ $type }} alert-dismissible fade show custom-alert" role="alert" id="alert-box">
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

<style>
.custom-alert {
    font-size: 20px; 
    margin-top: 10px;
    margin: 20px auto;
    width: 50%;
    color: black;
    background-color: rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
}
</style>