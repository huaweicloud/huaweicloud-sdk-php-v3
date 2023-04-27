<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BulkCreateAndDeleteVaultTagsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BulkCreateAndDeleteVaultTagsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tags  标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
    * sysTags  系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    * action  操作标识：仅限于create（创建）、delete（删除）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tags' => '\HuaweiCloud\SDK\Cbr\V1\Model\Tag[]',
            'sysTags' => '\HuaweiCloud\SDK\Cbr\V1\Model\SysTag[]',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tags  标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
    * sysTags  系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    * action  操作标识：仅限于create（创建）、delete（删除）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tags' => null,
        'sysTags' => null,
        'action' => null
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
    * tags  标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
    * sysTags  系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    * action  操作标识：仅限于create（创建）、delete（删除）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tags  标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
    * sysTags  系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    * action  操作标识：仅限于create（创建）、delete（删除）
    *
    * @var string[]
    */
    protected static $setters = [
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tags  标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
    * sysTags  系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    * action  操作标识：仅限于create（创建）、delete（删除）
    *
    * @var string[]
    */
    protected static $getters = [
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
            'action' => 'getAction'
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
    const ACTION_DELETE = 'delete';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE,
            self::ACTION_DELETE,
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
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
    * Gets tags
    *  标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\Tag[]|null $tags 标签列表。  tags不允许为空列表。  tags中最多包含10个key。  tags中key不允许重复。
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
    *  系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\SysTag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\SysTag[]|null $sysTags 系统标签列表。  op_service权限可以访问，和tags二选一。  目前TMS调用时只包含一个resource_tag结构体 ，key固定为：_sys_enterprise_project_id。  value是UUID或0,value为0表示默认企业项目。  现在仅支持create操作。
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets action
    *  操作标识：仅限于create（创建）、delete（删除）
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
    * @param string $action 操作标识：仅限于create（创建）、delete（删除）
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

