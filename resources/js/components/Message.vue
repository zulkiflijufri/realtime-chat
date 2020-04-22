<template>
    <div>
        <li class="list-group-item" :class="className">
            <slot></slot>
        </li>
        <span class="badge float-right" :class="badgeName">You</span>
    </div>
</template>

<script>
export default {
    props: ["color"],
    computed: {
        className() {
            return "list-group-item-" + this.color;
        },
        badgeName() {
            return "badge-" + this.color;
        }
    }
};
</script>
