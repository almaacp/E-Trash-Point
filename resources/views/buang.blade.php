@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 28rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h2 class="card-title text-center">BUANG SAMPAH</h2>
                <div class="row">
                    <div class="col">
                        <form id="trashForm" action="{{ url('/user/historibuangsampah') }}" method="post">
                            @csrf
            
                            <div class="mt-4">
                                <label class="form-label" style="font-size: 17px" for="">Pilih kode trash untuk membuka tempat sampah</label>
                                <select class="form-select" name="trashcode" id="trashcode">
                                    <option value="" disabled selected>Pilih Kode Trash</option>
                                    <option value="G-0001">G-0001</option>
                                    <option value="K-0001">K-0001</option>
                                    <option value="B6-0001">B6-0001</option>
                                    <option value="B1-0001">B1-0001</option>
                                </select>
                                <span class="text-danger" id="error-message"></span>
                            </div>                            

                            <div class="mt-5 text-body-secondary">Kode trash dapat dilihat di <a href="{{ url('/user/infotrash') }}" style="color: rgb(0, 185, 0)">Info Trash</a></div>
                            
                            <div class="mt-5 d-flex justify-content-between align-items-center"> 
                                <div>
                                    <a id="backButton" href="{{ url('/user/historibuangsampah') }}" class="btn btn-secondary">BACK</a>
                                </div>
                                <div>
                                    <button id="openCloseButton" class="btn btn-success">OPEN</button>
                                </div>
                            </div>    
                            
                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
<div><br><br></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('openCloseButton').addEventListener('click', function(event) {
            event.preventDefault();

            var button = document.getElementById('openCloseButton');
            var trashcodeInput = document.getElementById('trashcode');
            var errorMessage = document.getElementById('error-message');
            var backButton = document.getElementById('backButton'); 

            if (button.innerHTML === 'OPEN') {
                if (!trashcodeInput.value.trim()) {
                    errorMessage.textContent = 'The trashcode field is required.';
                    return;
                } else {
                    errorMessage.textContent = ''; 
                }
                
                trashcodeInput.disabled = true;
                
                backButton.style.display = 'none';
            }

            if (button.innerHTML === 'OPEN') {
                button.innerHTML = 'CLOSE';
                button.classList.remove('btn-success');
                button.classList.add('btn-danger');
            } else {
                // Tambahkan logika untuk menampilkan pop-up di sini
                var confirmation = confirm('Apakah Anda yakin ingin menutup tempat sampah?');
                if (confirmation) {
                    window.location.href = "{{ url('/user/historibuangsampah') }}";
                } else {
                    // Jika pengguna membatalkan, kembalikan tombol ke keadaan OPEN
                    button.innerHTML = 'OPEN';
                    button.classList.remove('btn-danger');
                    button.classList.add('btn-success');
                    trashcodeInput.disabled = false;
                    backButton.style.display = 'block';
                }
            }
        });
    });
</script>

@endsection