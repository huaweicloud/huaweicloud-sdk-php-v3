<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAddSharedTagsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAddSharedTagsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    * tags  标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    * sysTags  系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'tags' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]',
            'sysTags' => '\HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    * tags  标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    * sysTags  系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'tags' => null,
        'sysTags' => null
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
    * action  操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    * tags  标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    * sysTags  系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'tags' => 'tags',
            'sysTags' => 'sys_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    * tags  标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    * sysTags  系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    * tags  标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    * sysTags  系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags'
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
    const ACTION_CREATE = 'create';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE,
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    *  操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 操作标识，取值范围为：create。 为指定共享批量添加标签时使用create。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null $tags 标签列表。 用户权限时该字段必选。如果有op_service权限时，tags和sys_tags二选一。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @return \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\SFSTurbo\V1\Model\ResourceTag[]|null $sysTags 系统标签列表。 op_service权限可以访问，和tags二选一。目前TMS调用时只包含一个resource_tag结构体，key固定为：_sys_enterprise_project_id。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
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

