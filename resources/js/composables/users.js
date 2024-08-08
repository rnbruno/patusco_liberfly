
import { ref, inject } from 'vue'
import { useRouter } from 'vue-router'

export default function useUsers() {
    localStorage.removeItem("user");
    localStorage.removeItem("loggedIn");

    const logins = ref({})
    const users = ref({})
    const login = ref({
        email: '',
        password: '',
        remember: ''
    })
    const router = useRouter()
    const validationErrors = ref({})
    const isLoading = ref(false)
    const swal = inject('$swal')

    const getUsers = async (login) => (
        page = 1,
        email = '',
        password = '',
    ) => {
        axios.get('/api/user?email=' + email +
            '&password=' + password )
            .then(response => {
                logins.value = response.data;
            })
    }

    const getUser = async (login) => {
        axios.get('/api/user/' + email)
            .then(response => {
                logins.value = response.data.data;
            })
    }


    return {
        getUsers,
        getUser,
        validationErrors,
        isLoading
    }
}
