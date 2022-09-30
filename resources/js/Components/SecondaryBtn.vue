<script setup>
    defineProps({
        type: {
            type: String,
            default: 'button',
        },
    });
    </script>
    
    <template>
        <button :type="type" class="bg-secondaryBackground w-12 h-9 rounded text-white">
            <slot />
        </button>
    </template>
    