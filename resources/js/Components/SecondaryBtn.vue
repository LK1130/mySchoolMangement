<script setup>
    defineProps({
        type: {
            type: String,
            default: 'button',
        },
    });
    </script>
    
    <template>
        <button :type="type" class="bg-secondaryBackground w-24 px-3  pr-3 rounded-full  text-white">
            <slot />
        </button>
    </template>
    