<script type="module">


        const button = document.getElementById("criarbotao");
        const myModalEl = document.getElementById("exampleModal");
        const modal = new Modal(myModalEl);

        document.getElementById("criarbotao").addEventListener("click", ModalCriar);

        function ModalCriar() {


            let nome = document.getElementById("nome").value;
            let email = document.getElementById("email").value;
            let cidade = document.getElementById("cidade").value;
            let senha = document.getElementById("senha").value;
            let telefone = document.getElementById("telefone").value;

            axios.post("{{ route('cadastro.store') }}", {
                nome: nome,
                email: email,
                cidade: cidade,
                senha: senha,
                telefone: telefone,
            })
            .then(function(response) {

                modal.hide();
                myModalEl.addEventListener('hidden.te.modal', () => {
                    const toast = new Toast(document.getElementById('toast-success')).show();

                });

                console.log(response);
            })
            .catch(function(error) {



                let geterro = error.response.data.errors;
                // errogeral = error.response.data.message;
                // console.log(errogeral);
                console.log(geterro);
                erro_nome.innerHTML = ''
                erro_email.innerHTML = ''
                erro_cidade.innerHTML = ''
                erro_senha.innerHTML = ''
                erro_telefone.innerHTML = ''

                let inicio_modal = document.querySelector('#exampleModalLabel')
                inicio_modal.scrollIntoView();

                if (geterro) {

                    if (geterro.nome != null) {
                        let erro_nome = document.querySelector('#erro_nome');
                        let erro_nome_validator = Object.values(geterro.nome);
                        erro_nome_validator.forEach(element => erro_nome.innerHTML = "*" + element +
                            " ");
                    }

                    if (geterro.email != null) {
                        let erro_email = document.querySelector('#erro_email');
                        let email_validator = Object.values(geterro.email);
                        email_validator.forEach(element => erro_email.innerHTML = "<div> *" + element +
                            " </div>");
                    }

                    if (geterro.cidade != null) {
                        let erro_cidade = document.querySelector('#erro_cidade');
                        let cidade_validator = Object.values(geterro.cidade);
                        cidade_validator.forEach(element => erro_cidade.innerHTML = "<div> *" + element +
                            " </div>");
                    }

                    if (geterro.senha != null) {
                        let erro_long_om = document.querySelector('#erro_senha');
                        let senha_validator = Object.values(geterro.senha);
                        senha_validator.forEach(element => erro_long_om.innerHTML = "<div> *" + element +
                            " </div>");
                    }


                }
            });



        }






</script>
