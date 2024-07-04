<script setup>

    import { useForm } from '@inertiajs/vue3';
    import {router} from '@inertiajs/vue3';
    import Swal from '../../plugins/sweetalert2';

    defineProps({
        errors: Object
    });

    const form=useForm({
        id:null,
        nome:null,
    });


</script>