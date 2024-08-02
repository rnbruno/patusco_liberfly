<template>
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">

                        </div>
                    </div>
                    <Navbar />
                </div>
            </div>
        </nav>
        <!-- Page Content -->
        <main>
            <div class="py-12 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 form-signin">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200 ">
                            <div class="pricing-header p-3 pb-md-4 mx-auto text-center "></div>
                            <form>
                                <div class="shrink-0 flex items-center">
                                    <img class="mb-4" :src="logoUrl" style="width:65px" alt="Logo" width="72"
                                        height="57">
                                    <h1 class="h3 ml-3 fw-normal">Login Patusco</h1>
                                </div>

                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>

                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                                <button class="w-100 btn btn-sm btn-primary" @click="submit">Sign in</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <Footer />
</template>
<script>
import Navbar from '../layouts/Navbar.vue';
import Footer from '../layouts/Footer.vue';

export default {
    name: 'Login',
    data() {
        return {
            logoUrl: '/img/logo.jpg', // Caminho relativo a partir da pasta public
            showDropdown: false,
            errorLogin: false,
            user: {},
            email: '',
            password: '',
            showPassword: false,
            valid: false,
            rules: {
                required: (value) => !!value || 'Required.',
                email: (value) => {
                    const pattern = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/
                    return pattern.test(value) || 'Invalid e-mail.'
                },
            },
        }
    },
    components: {
        Navbar,
        Footer
    },
    methods: {
        login() {
            this.errorLogin = false
            this.$store.dispatch(`auth/${AUTH_REQUEST}`, this.user)
                .then(() => {
                    this.$router.push('/');
                }).catch(() => {
                    this.errorLogin = true
                });
            // this.loading = false
        },
        submit() {
            this.$emit('submit', this.email)
        }

    }

}
</script>
<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}

.b-example-divider {
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}

.bi {
    vertical-align: -.125em;
    fill: currentColor;
}

.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}

.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}

.form-signin {
    max-width: 330px;
    padding: 15px;
}

.form-signin .form-floating:focus-within {
    z-index: 2;
}

.form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
</style>