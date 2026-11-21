<x-layouts::auth :title="__('Register')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf
            <!-- LastName -->
            <flux:input
                name="lastname"
                :label="__('Фамилия')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="family-name"
                :placeholder="__('Фамилия')"
            />
            <!-- FirstName -->
            <flux:input
                name="firstname"
                :label="__('Имя')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="given-name"
                :placeholder="__('Имя')"
            />
            <!-- MiddleName -->
            <flux:input
                name="middlename"
                :label="__('Отчетсво')"
                :value="old('name')"
                type="text"
                autofocus
                autocomplete="additional-name"
                :placeholder="__('Отчетсво')"
            />
            <!-- Tel -->
            <flux:input
                name="tel"
                :label="__('Телефон')"
                :value="old('name')"
                type="tel"
                required
                autofocus
                autocomplete="tel"
                :placeholder="__('Телефон')"
            />
            <!-- Login -->
            <flux:input
                name="login"
                :label="__('Логин')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="username"
                :placeholder="__('Логин')"
            />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Адрес почты')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <flux:input
                name="password"
                :label="__('Пароль')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                passwordrules="{{ \Illuminate\Validation\Rules\Password::defaults()->toPasswordRulesString() }}"
                viewable
            />

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Подтвердите пароль')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                passwordrules="{{ \Illuminate\Validation\Rules\Password::defaults()->toPasswordRulesString() }}"
                viewable
            />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Зарегистрироваться') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
