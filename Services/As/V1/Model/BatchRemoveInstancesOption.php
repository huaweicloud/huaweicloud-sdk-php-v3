<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchRemoveInstancesOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchRemoveInstancesOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instancesId  云服务器ID。
    * instanceDelete  从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    * action  批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
    * instanceAppend  将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instancesId' => 'string[]',
            'instanceDelete' => 'string',
            'action' => 'string',
            'instanceAppend' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instancesId  云服务器ID。
    * instanceDelete  从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    * action  批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
    * instanceAppend  将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instancesId' => null,
        'instanceDelete' => null,
        'action' => null,
        'instanceAppend' => null
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
    * instancesId  云服务器ID。
    * instanceDelete  从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    * action  批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
    * instanceAppend  将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instancesId' => 'instances_id',
            'instanceDelete' => 'instance_delete',
            'action' => 'action',
            'instanceAppend' => 'instance_append'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instancesId  云服务器ID。
    * instanceDelete  从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    * action  批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
    * instanceAppend  将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @var string[]
    */
    protected static $setters = [
            'instancesId' => 'setInstancesId',
            'instanceDelete' => 'setInstanceDelete',
            'action' => 'setAction',
            'instanceAppend' => 'setInstanceAppend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instancesId  云服务器ID。
    * instanceDelete  从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    * action  批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
    * instanceAppend  将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @var string[]
    */
    protected static $getters = [
            'instancesId' => 'getInstancesId',
            'instanceDelete' => 'getInstanceDelete',
            'action' => 'getAction',
            'instanceAppend' => 'getInstanceAppend'
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
    const INSTANCE_DELETE_YES = 'yes';
    const INSTANCE_DELETE_NO = 'no';
    const ACTION_REMOVE = 'REMOVE';
    const INSTANCE_APPEND_NO = 'no';
    const INSTANCE_APPEND_YES = 'yes';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceDeleteAllowableValues()
    {
        return [
            self::INSTANCE_DELETE_YES,
            self::INSTANCE_DELETE_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_REMOVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceAppendAllowableValues()
    {
        return [
            self::INSTANCE_APPEND_NO,
            self::INSTANCE_APPEND_YES,
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
        $this->container['instancesId'] = isset($data['instancesId']) ? $data['instancesId'] : null;
        $this->container['instanceDelete'] = isset($data['instanceDelete']) ? $data['instanceDelete'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['instanceAppend'] = isset($data['instanceAppend']) ? $data['instanceAppend'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instancesId'] === null) {
            $invalidProperties[] = "'instancesId' can't be null";
        }
            $allowedValues = $this->getInstanceDeleteAllowableValues();
                if (!is_null($this->container['instanceDelete']) && !in_array($this->container['instanceDelete'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceDelete', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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

            $allowedValues = $this->getInstanceAppendAllowableValues();
                if (!is_null($this->container['instanceAppend']) && !in_array($this->container['instanceAppend'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceAppend', must be one of '%s'",
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
    * Gets instancesId
    *  云服务器ID。
    *
    * @return string[]
    */
    public function getInstancesId()
    {
        return $this->container['instancesId'];
    }

    /**
    * Sets instancesId
    *
    * @param string[] $instancesId 云服务器ID。
    *
    * @return $this
    */
    public function setInstancesId($instancesId)
    {
        $this->container['instancesId'] = $instancesId;
        return $this;
    }

    /**
    * Gets instanceDelete
    *  从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    *
    * @return string|null
    */
    public function getInstanceDelete()
    {
        return $this->container['instanceDelete'];
    }

    /**
    * Sets instanceDelete
    *
    * @param string|null $instanceDelete 从伸缩组中移出实例时，是否删除云服务器。默认为no；可选值为yes或no。只有action为REMOVE时，这个字段才生效。
    *
    * @return $this
    */
    public function setInstanceDelete($instanceDelete)
    {
        $this->container['instanceDelete'] = $instanceDelete;
        return $this;
    }

    /**
    * Gets action
    *  批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
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
    * @param string $action 批量操作实例action标识：添加：ADD  移除： REMOVE  设置实例保护： PROTECT  取消实例保护： UNPROTECT；转入备用状态：ENTER_STANDBY 移出备用状态:EXIT_STANDBY
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets instanceAppend
    *  将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @return string|null
    */
    public function getInstanceAppend()
    {
        return $this->container['instanceAppend'];
    }

    /**
    * Sets instanceAppend
    *
    * @param string|null $instanceAppend 将实例移入备用状态时，是否补充新的云服务器。取值如下：no：不补充新的实例，默认情况为no。yes：补充新的实例。只有action为ENTER_STANDBY时，这个字段才生效。
    *
    * @return $this
    */
    public function setInstanceAppend($instanceAppend)
    {
        $this->container['instanceAppend'] = $instanceAppend;
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

