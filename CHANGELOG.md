# 3.0.6-beta 2021-01-30
## HuaweiCloud SDK ECS
- ### Features
    - None
- ### Bug Fix
    - None
- ### Change
    - Change interface name from `UpdateAutoTerminateTimeServer` to `UpdateServerAutoTerminateTime`.

## HuaweiCloud SDK EVS
- ### Features
    - None
- ### Bug Fix
    - None
- ### Change
    - Interface `CinderCreateVolume` is supported to specify the id of dedicated storage pool using property `OS-SCH-HNT:scheduler_hints`.
    - Modify property type of `allocated` of class `QuotaDetails` from `String` to `Integer`.

## HuaweiCloud SDK IAM
- ### Features
    - None
- ### Bug Fix
    - None
- ### Change
    - Increases the property `access_mode` of response class of interface `ShowUser`.


# 3.0.5-beta 2021-01-25
## HuaweiCloud SDK Core
- ### Features
    - None
- ### Bug Fix
    - None
- ### Change
    - The default value of `ConnectionTimeout` is set to 60 seconds.
    - The default value of `ReadTimeout` is set to 120 seconds.

## HuaweiCloud SDK ECS
- ### Features
    - Support more interface: UpdateAutoTerminateTimeServer.
- ### Bug Fix
    - None
- ### Change
    - The default value of `ConnectionTimeout` is set to 60 seconds.
    - The default value of `ReadTimeout` is set to 60 seconds.


# 3.0.4-beta 2021-01-15
## HuaweiCloud SDK Core
- ### Features
    - None
- ### Bug Fix
    - None
- ### Change
    - Modify function of `newBuilder`.

# 3.0.3-beta 2020-12-15
## HuaweiCloud SDK ECS
- ### Features
    - Support interfaces of ECS.
- ### Bug Fix
    - None
- ### Change
    - None

## HuaweiCloud SDK VPC
- ### Features
    - Support interfaces of version v2.
- ### Bug Fix
    - None
- ### Change
    - None

## Huaweicloud SDK EIP
- ### Features
    - Support Elastic IP service.
- ### Bug Fix
    - None
- ### Change
    - None

# 3.0.2-beta 2020-12-04
## HuaweiCloud SDK Core
- ### Features
    - None
- ### Bug Fix
    - Fix the problem that the Credentials type is incorrect because the HUAWEICLOUD_SDK_TYPE variable is not set when credentials are obtained from environment variables.
- ### Change
    - A listener is added to obtain the original encrypted HTTP request and return information.

# 3.0.1-beta 2020-10-19
## First Release
- ### Supported Services
    - Identity and Access Management(IAM)