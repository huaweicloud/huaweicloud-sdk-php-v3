<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationPreferences implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'operation_preferences';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionConcurrencyType  部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    * regionOrder  区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    * failureToleranceCount  容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * failureTolerancePercentage  容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * maxConcurrentCount  每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * maxConcurrentPercentage  最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * failureToleranceMode  资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionConcurrencyType' => 'string',
            'regionOrder' => 'string[]',
            'failureToleranceCount' => 'int',
            'failureTolerancePercentage' => 'int',
            'maxConcurrentCount' => 'int',
            'maxConcurrentPercentage' => 'int',
            'failureToleranceMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionConcurrencyType  部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    * regionOrder  区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    * failureToleranceCount  容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * failureTolerancePercentage  容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * maxConcurrentCount  每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * maxConcurrentPercentage  最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * failureToleranceMode  资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionConcurrencyType' => null,
        'regionOrder' => null,
        'failureToleranceCount' => 'int64',
        'failureTolerancePercentage' => 'int64',
        'maxConcurrentCount' => 'int64',
        'maxConcurrentPercentage' => 'int64',
        'failureToleranceMode' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * regionConcurrencyType  部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    * regionOrder  区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    * failureToleranceCount  容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * failureTolerancePercentage  容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * maxConcurrentCount  每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * maxConcurrentPercentage  最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * failureToleranceMode  资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionConcurrencyType' => 'region_concurrency_type',
            'regionOrder' => 'region_order',
            'failureToleranceCount' => 'failure_tolerance_count',
            'failureTolerancePercentage' => 'failure_tolerance_percentage',
            'maxConcurrentCount' => 'max_concurrent_count',
            'maxConcurrentPercentage' => 'max_concurrent_percentage',
            'failureToleranceMode' => 'failure_tolerance_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionConcurrencyType  部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    * regionOrder  区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    * failureToleranceCount  容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * failureTolerancePercentage  容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * maxConcurrentCount  每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * maxConcurrentPercentage  最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * failureToleranceMode  资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionConcurrencyType' => 'setRegionConcurrencyType',
            'regionOrder' => 'setRegionOrder',
            'failureToleranceCount' => 'setFailureToleranceCount',
            'failureTolerancePercentage' => 'setFailureTolerancePercentage',
            'maxConcurrentCount' => 'setMaxConcurrentCount',
            'maxConcurrentPercentage' => 'setMaxConcurrentPercentage',
            'failureToleranceMode' => 'setFailureToleranceMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionConcurrencyType  部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    * regionOrder  区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    * failureToleranceCount  容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * failureTolerancePercentage  容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    * maxConcurrentCount  每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * maxConcurrentPercentage  最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    * failureToleranceMode  资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionConcurrencyType' => 'getRegionConcurrencyType',
            'regionOrder' => 'getRegionOrder',
            'failureToleranceCount' => 'getFailureToleranceCount',
            'failureTolerancePercentage' => 'getFailureTolerancePercentage',
            'maxConcurrentCount' => 'getMaxConcurrentCount',
            'maxConcurrentPercentage' => 'getMaxConcurrentPercentage',
            'failureToleranceMode' => 'getFailureToleranceMode'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    const REGION_CONCURRENCY_TYPE_SEQUENTIAL = 'SEQUENTIAL';
    const REGION_CONCURRENCY_TYPE_PARALLEL = 'PARALLEL';
    const FAILURE_TOLERANCE_MODE_STRICT_FAILURE_TOLERANCE = 'STRICT_FAILURE_TOLERANCE';
    const FAILURE_TOLERANCE_MODE_SOFT_FAILURE_TOLERANCE = 'SOFT_FAILURE_TOLERANCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRegionConcurrencyTypeAllowableValues()
    {
        return [
            self::REGION_CONCURRENCY_TYPE_SEQUENTIAL,
            self::REGION_CONCURRENCY_TYPE_PARALLEL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailureToleranceModeAllowableValues()
    {
        return [
            self::FAILURE_TOLERANCE_MODE_STRICT_FAILURE_TOLERANCE,
            self::FAILURE_TOLERANCE_MODE_SOFT_FAILURE_TOLERANCE,
        ];
    }


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['regionConcurrencyType'] = isset($data['regionConcurrencyType']) ? $data['regionConcurrencyType'] : null;
        $this->container['regionOrder'] = isset($data['regionOrder']) ? $data['regionOrder'] : null;
        $this->container['failureToleranceCount'] = isset($data['failureToleranceCount']) ? $data['failureToleranceCount'] : null;
        $this->container['failureTolerancePercentage'] = isset($data['failureTolerancePercentage']) ? $data['failureTolerancePercentage'] : null;
        $this->container['maxConcurrentCount'] = isset($data['maxConcurrentCount']) ? $data['maxConcurrentCount'] : null;
        $this->container['maxConcurrentPercentage'] = isset($data['maxConcurrentPercentage']) ? $data['maxConcurrentPercentage'] : null;
        $this->container['failureToleranceMode'] = isset($data['failureToleranceMode']) ? $data['failureToleranceMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getRegionConcurrencyTypeAllowableValues();
                if (!is_null($this->container['regionConcurrencyType']) && !in_array($this->container['regionConcurrencyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'regionConcurrencyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['failureToleranceCount']) && ($this->container['failureToleranceCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'failureToleranceCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['failureToleranceCount']) && ($this->container['failureToleranceCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'failureToleranceCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failureTolerancePercentage']) && ($this->container['failureTolerancePercentage'] > 100)) {
                $invalidProperties[] = "invalid value for 'failureTolerancePercentage', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['failureTolerancePercentage']) && ($this->container['failureTolerancePercentage'] < 0)) {
                $invalidProperties[] = "invalid value for 'failureTolerancePercentage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxConcurrentCount']) && ($this->container['maxConcurrentCount'] > 5)) {
                $invalidProperties[] = "invalid value for 'maxConcurrentCount', must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['maxConcurrentCount']) && ($this->container['maxConcurrentCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxConcurrentCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxConcurrentPercentage']) && ($this->container['maxConcurrentPercentage'] > 100)) {
                $invalidProperties[] = "invalid value for 'maxConcurrentPercentage', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['maxConcurrentPercentage']) && ($this->container['maxConcurrentPercentage'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxConcurrentPercentage', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getFailureToleranceModeAllowableValues();
                if (!is_null($this->container['failureToleranceMode']) && !in_array($this->container['failureToleranceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failureToleranceMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets regionConcurrencyType
    *  部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    *
    * @return string|null
    */
    public function getRegionConcurrencyType()
    {
        return $this->container['regionConcurrencyType'];
    }

    /**
    * Sets regionConcurrencyType
    *
    * @param string|null $regionConcurrencyType 部署资源栈实例时区域（region）的执行策略，分为两种，SEQUENTIAL和PARALLEL，区分大小写，默认值为SEQUENTIAL  详细介绍：  * `SEQUENTIAL`：顺序执行，执行完一个region下的全部资源栈实例后再去执行另一个region。默认顺序执行。  * `PARALLEL`：并发执行，并发部署所有指定区域的资源栈实例。
    *
    * @return $this
    */
    public function setRegionConcurrencyType($regionConcurrencyType)
    {
        $this->container['regionConcurrencyType'] = $regionConcurrencyType;
        return $this;
    }

    /**
    * Gets regionOrder
    *  区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    *
    * @return string[]|null
    */
    public function getRegionOrder()
    {
        return $this->container['regionOrder'];
    }

    /**
    * Sets regionOrder
    *
    * @param string[]|null $regionOrder 区域（region）部署顺序。只有当用户指定region_concurrency_type为SEQUENTIAL时才会允许指定该参数。用户指定部署region的顺序，不允许出现资源栈集管理之外的region。  如果不指定，实际部署region顺序随机。部署顺序仅在当次部署时生效，应该包含且仅包含本次部署的所有region。
    *
    * @return $this
    */
    public function setRegionOrder($regionOrder)
    {
        $this->container['regionOrder'] = $regionOrder;
        return $this;
    }

    /**
    * Gets failureToleranceCount
    *  容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    *
    * @return int|null
    */
    public function getFailureToleranceCount()
    {
        return $this->container['failureToleranceCount'];
    }

    /**
    * Sets failureToleranceCount
    *
    * @param int|null $failureToleranceCount 容错次数。用户定义在每个区域（region）下，允许部署失败的资源栈实例数量。该参数取值默认为0，限定0和正整数。  如果定义region顺序执行（region_concurrency_type值为SEQUENTIAL），在某个region超过容错次数时，资源栈集会取消所有状态仍处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE；  如果是region并行执行（region_concurrency_type值为PARALLEL），在某个region超过容错次数时，资源栈集只会取消该region下所有处于WAIT_IN_PROGRESS状态的实例。被取消的实例状态最终变为CANCEL_COMPLETE。  对处于OPERATION_IN_PROGRESS，或已经部署完成，即处于OPERATION_COMPLETE或者OPERATION_FAILED状态的资源栈实例，不受影响，状态不变。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    *
    * @return $this
    */
    public function setFailureToleranceCount($failureToleranceCount)
    {
        $this->container['failureToleranceCount'] = $failureToleranceCount;
        return $this;
    }

    /**
    * Gets failureTolerancePercentage
    *  容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    *
    * @return int|null
    */
    public function getFailureTolerancePercentage()
    {
        return $this->container['failureTolerancePercentage'];
    }

    /**
    * Sets failureTolerancePercentage
    *
    * @param int|null $failureTolerancePercentage 容错百分比。定义每个区域（region）下，允许部署失败的资源栈实例数占该region下所有资源栈实例数的百分比。该参数取值默认为0，限定0和正整数。  通过容错百分比*资源栈实例数，并向下取整，得到实际容错次数。  failure_tolerance_count  和 failure_tolerance_percentage 仅能有一个存在。
    *
    * @return $this
    */
    public function setFailureTolerancePercentage($failureTolerancePercentage)
    {
        $this->container['failureTolerancePercentage'] = $failureTolerancePercentage;
        return $this;
    }

    /**
    * Gets maxConcurrentCount
    *  每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    *
    * @return int|null
    */
    public function getMaxConcurrentCount()
    {
        return $this->container['maxConcurrentCount'];
    }

    /**
    * Sets maxConcurrentCount
    *
    * @param int|null $maxConcurrentCount 每个区域（region）下可同时部署资源栈实例的最大账号数。该参数取值默认为1，限定为正整数。  最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    *
    * @return $this
    */
    public function setMaxConcurrentCount($maxConcurrentCount)
    {
        $this->container['maxConcurrentCount'] = $maxConcurrentCount;
        return $this;
    }

    /**
    * Gets maxConcurrentPercentage
    *  最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    *
    * @return int|null
    */
    public function getMaxConcurrentPercentage()
    {
        return $this->container['maxConcurrentPercentage'];
    }

    /**
    * Sets maxConcurrentPercentage
    *
    * @param int|null $maxConcurrentPercentage 最大并发账号百分比，每个区域（region）中可同时部署的资源栈实例的最大账号百分比。该参数取值默认为1，限定正整数。  RFS根据百分比 *（每个region下资源栈实例数）得到的值，再向下取整，得到实际最大并发账号数。如果实际最大并发账号数向下取整值为0时，则默认选择最大并发账号数为1。  通过百分比计算得到的实际最大并发账号数最多比容错次数多1。如果用户指定failure_tolerance_percentage，实际最大并发账号数最多比 failure_tolerance_percentage * 资源栈实例数多1。保证部署在所需的容错级别停止。  max_concurrent_count 和 max_concurrent_percentage 仅能有一个存在。
    *
    * @return $this
    */
    public function setMaxConcurrentPercentage($maxConcurrentPercentage)
    {
        $this->container['maxConcurrentPercentage'] = $maxConcurrentPercentage;
        return $this;
    }

    /**
    * Gets failureToleranceMode
    *  资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @return string|null
    */
    public function getFailureToleranceMode()
    {
        return $this->container['failureToleranceMode'];
    }

    /**
    * Sets failureToleranceMode
    *
    * @param string|null $failureToleranceMode 资源栈集操作部署的失败容忍模式，分为两种，STRICT_FAILURE_TOLERANCE和SOFT_FAILURE_TOLERANCE，区分大小写，默认值为STRICT_FAILURE_TOLERANCE。  详细介绍：  * `STRICT_FAILURE_TOLERANCE`：此选项会动态降低并发级别，以确保同region下部署失败的账号数量永远不超过 failure_tolerance_count + 1。当用户指定failure_tolerance_percentage时，确保同region下部署失败的账号数量不超过 failure_tolerance_percentage * 资源栈实例数 + 1。  * 初始实际最大并发数为max_concurrent_count，如果用户指定的是max_concurrent_percentage，则初始实际最大并发数为 max_concurrent_percentage * 资源栈实例数，随后，实际最大并发数会根据失败次数增加而减少。  * `SOFT_FAILURE_TOLERANCE`：此选项将failure_tolerance_count (failure_tolerance_percentage) 与实际并发数分离开。该参数允许资源栈集操作始终以指定的 max_concurrent_count 或 max_concurrent_percentage 操作资源栈实例。  * 此时不保证资源栈实例失败总数小于 failure_tolerance_count + 1，如果用户指定的是failure_tolerance_percentage的值，则不保证资源栈实例失败总数小于 failure_tolerance_percentage * 资源栈实例数 + 1。
    *
    * @return $this
    */
    public function setFailureToleranceMode($failureToleranceMode)
    {
        $this->container['failureToleranceMode'] = $failureToleranceMode;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

