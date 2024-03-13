<?php if (is_loggedin()) : ?>
    </div>
    <footer class="pb-3">
        <p class="pt-3 block text-center text-sm">&copy; Copyright <?= date('Y') ?></p>
    </footer>
    </main>
    </div>
    </div>
<?php else : ?>
    <!-- Login/Register page footer -->
    <footer class="">
        <p class="py-4 block text-center text-sm">&copy; Copyright <?= date('Y') ?></p>
    </footer>

<?php endif; ?>



<script src="https://cdn.tailwindcss.com"></script>
</body>

</html>