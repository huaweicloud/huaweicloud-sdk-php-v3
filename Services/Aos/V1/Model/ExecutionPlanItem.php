<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionPlanItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionPlanItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    * providerName  表示该资源所属的provider名字。
    * resourceType  当前资源在HCL模板中对应的类型。
    * resourceName  当前资源的在HCL模板中指定的名字。
    * index  表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    * mode  * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由配置漂移导致。
    * resourceId  当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    * attributes  执行计划元素变更的属性，当无属性变更时为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'actionReason' => 'string',
            'providerName' => 'string',
            'resourceType' => 'string',
            'resourceName' => 'string',
            'index' => 'string',
            'mode' => 'string',
            'drifted' => 'bool',
            'resourceId' => 'string',
            'attributes' => '\HuaweiCloud\SDK\Aos\V1\Model\ExecutionPlanDiffAttribute[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    * providerName  表示该资源所属的provider名字。
    * resourceType  当前资源在HCL模板中对应的类型。
    * resourceName  当前资源的在HCL模板中指定的名字。
    * index  表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    * mode  * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由配置漂移导致。
    * resourceId  当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    * attributes  执行计划元素变更的属性，当无属性变更时为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'actionReason' => null,
        'providerName' => null,
        'resourceType' => null,
        'resourceName' => null,
        'index' => null,
        'mode' => null,
        'drifted' => null,
        'resourceId' => null,
        'attributes' => null
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
    * action  资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    * providerName  表示该资源所属的provider名字。
    * resourceType  当前资源在HCL模板中对应的类型。
    * resourceName  当前资源的在HCL模板中指定的名字。
    * index  表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    * mode  * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由配置漂移导致。
    * resourceId  当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    * attributes  执行计划元素变更的属性，当无属性变更时为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'actionReason' => 'action_reason',
            'providerName' => 'provider_name',
            'resourceType' => 'resource_type',
            'resourceName' => 'resource_name',
            'index' => 'index',
            'mode' => 'mode',
            'drifted' => 'drifted',
            'resourceId' => 'resource_id',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    * providerName  表示该资源所属的provider名字。
    * resourceType  当前资源在HCL模板中对应的类型。
    * resourceName  当前资源的在HCL模板中指定的名字。
    * index  表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    * mode  * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由配置漂移导致。
    * resourceId  当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    * attributes  执行计划元素变更的属性，当无属性变更时为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'actionReason' => 'setActionReason',
            'providerName' => 'setProviderName',
            'resourceType' => 'setResourceType',
            'resourceName' => 'setResourceName',
            'index' => 'setIndex',
            'mode' => 'setMode',
            'drifted' => 'setDrifted',
            'resourceId' => 'setResourceId',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    * actionReason  表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    * providerName  表示该资源所属的provider名字。
    * resourceType  当前资源在HCL模板中对应的类型。
    * resourceName  当前资源的在HCL模板中指定的名字。
    * index  表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    * mode  * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    * drifted  当前资源的变更是否由配置漂移导致。
    * resourceId  当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    * attributes  执行计划元素变更的属性，当无属性变更时为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'actionReason' => 'getActionReason',
            'providerName' => 'getProviderName',
            'resourceType' => 'getResourceType',
            'resourceName' => 'getResourceName',
            'index' => 'getIndex',
            'mode' => 'getMode',
            'drifted' => 'getDrifted',
            'resourceId' => 'getResourceId',
            'attributes' => 'getAttributes'
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
    const ACTION_ADD = 'ADD';
    const ACTION_ADD_THEN_DELETE = 'ADD_THEN_DELETE';
    const ACTION_DELETE = 'DELETE';
    const ACTION_DELETE_THEN_ADD = 'DELETE_THEN_ADD';
    const ACTION_UPDATE = 'UPDATE';
    const ACTION_IN_PLACE_UPDATE = 'IN_PLACE_UPDATE';
    const ACTION_NO_OPERATION = 'NO_OPERATION';
    const MODE_DATA = 'DATA';
    const MODE_RESOURCE = 'RESOURCE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_ADD,
            self::ACTION_ADD_THEN_DELETE,
            self::ACTION_DELETE,
            self::ACTION_DELETE_THEN_ADD,
            self::ACTION_UPDATE,
            self::ACTION_IN_PLACE_UPDATE,
            self::ACTION_NO_OPERATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_DATA,
            self::MODE_RESOURCE,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['actionReason'] = isset($data['actionReason']) ? $data['actionReason'] : null;
        $this->container['providerName'] = isset($data['providerName']) ? $data['providerName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['drifted'] = isset($data['drifted']) ? $data['drifted'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
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
    * Gets action
    *  资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 资源变更的类型，这里，IN_PLACE_UPDATE、ADD_THEN_DELETE和 DELETE_THEN_ADD均为更新操作，IN_PLACE_UPDATE指原地更新； 而对于不可更新的资源，ADD_THEN_DELETE是先创建新的，再删除旧的；DELETE_THEN_ADD是先删除旧的，再创建新的. 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行 * `ADD` - 新建资源 * `ADD_THEN_DELETE` - 对于不可更新的资源执行先创建再删除的操作 * `DELETE ` - 删除资源 * `DELETE_THEN_ADD` - 对于不可更新的资源执行先删除在创建的操作 * `UPDATE` - 更新资源  * `IN_PLACE_UPDATE` - 更新资源的操作 * `NO_OPERATION` - 变更资源的依赖关系，但是对资源本身并无修改的操作
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets actionReason
    *  表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    *
    * @return string|null
    */
    public function getActionReason()
    {
        return $this->container['actionReason'];
    }

    /**
    * Sets actionReason
    *
    * @param string|null $actionReason 表示该动作触发的原因，例如用户更新模板；远端删除资源等等
    *
    * @return $this
    */
    public function setActionReason($actionReason)
    {
        $this->container['actionReason'] = $actionReason;
        return $this;
    }

    /**
    * Gets providerName
    *  表示该资源所属的provider名字。
    *
    * @return string|null
    */
    public function getProviderName()
    {
        return $this->container['providerName'];
    }

    /**
    * Sets providerName
    *
    * @param string|null $providerName 表示该资源所属的provider名字。
    *
    * @return $this
    */
    public function setProviderName($providerName)
    {
        $this->container['providerName'] = $providerName;
        return $this;
    }

    /**
    * Gets resourceType
    *  当前资源在HCL模板中对应的类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 当前资源在HCL模板中对应的类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceName
    *  当前资源的在HCL模板中指定的名字。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 当前资源的在HCL模板中指定的名字。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets index
    *  表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    *
    * @return string|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param string|null $index 表示资源对应的index，例如对于使用count构建的资源，其类型和名字一样，但是index是从1到count的数值；对于使用for_each创建的资源，index可以是for_each中指定的key名。
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
        return $this;
    }

    /**
    * Gets mode
    *  * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode * `DATA` - 指可以在模板解析期间运行和获取服务端数据的资源类型，不会操作基础设施组件 * `RESOURCE` - 指通过模板管理的由服务定义的基础设施组件抽象，可以是物理资源也可以是逻辑资源
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets drifted
    *  当前资源的变更是否由配置漂移导致。
    *
    * @return bool|null
    */
    public function getDrifted()
    {
        return $this->container['drifted'];
    }

    /**
    * Sets drifted
    *
    * @param bool|null $drifted 当前资源的变更是否由配置漂移导致。
    *
    * @return $this
    */
    public function setDrifted($drifted)
    {
        $this->container['drifted'] = $drifted;
        return $this;
    }

    /**
    * Gets resourceId
    *  当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 当前资源的唯一ID，当操作类型为创建时为空。当资源为新建时为空。注意resouce_name是资源在HCL模板中定义的名字，resource_id是provider提供的唯一ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets attributes
    *  执行计划元素变更的属性，当无属性变更时为空。
    *
    * @return \HuaweiCloud\SDK\Aos\V1\Model\ExecutionPlanDiffAttribute[]|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\Aos\V1\Model\ExecutionPlanDiffAttribute[]|null $attributes 执行计划元素变更的属性，当无属性变更时为空。
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

