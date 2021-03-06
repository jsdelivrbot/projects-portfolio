"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var ProfileComponent = (function () {
    function ProfileComponent() {
        this.title = 'Hello World';
        this.showAddress = false;
        this.person = {
            name: 'John Doe',
            age: 34,
            address: {
                street: '400 Walnut st',
                city: 'Lynn',
                state: 'MA'
            },
            avatar: 'https://d35bxr3ccprye3.cloudfront.net/images/blank-avatar.gif',
            friends: [
                { name: 'Bob', age: 34 },
                { name: 'Shelly', age: 36 },
                { name: 'Jack', age: 32 },
                { name: 'Steve', age: 40 }
            ]
        };
        this.title = 'User Profile';
    }
    ProfileComponent = __decorate([
        core_1.Component({
            moduleId: module.id,
            selector: 'profile',
            templateUrl: 'profile.component.html'
        }), 
        __metadata('design:paramtypes', [])
    ], ProfileComponent);
    return ProfileComponent;
}());
exports.ProfileComponent = ProfileComponent;
//# sourceMappingURL=profile.component.js.map