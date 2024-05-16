<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociatePermissionReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociatePermissionReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replace  指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    * permissionId  共享资源权限的ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replace' => 'bool',
            'permissionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replace  指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    * permissionId  共享资源权限的ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'replace' => null,
        'permissionId' => null
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
    * replace  指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    * permissionId  共享资源权限的ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replace' => 'replace',
            'permissionId' => 'permission_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replace  指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    * permissionId  共享资源权限的ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'replace' => 'setReplace',
            'permissionId' => 'setPermissionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replace  指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    * permissionId  共享资源权限的ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'replace' => 'getReplace',
            'permissionId' => 'getPermissionId'
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
        $this->container['replace'] = isset($data['replace']) ? $data['replace'] : null;
        $this->container['permissionId'] = isset($data['permissionId']) ? $data['permissionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['permissionId'] === null) {
            $invalidProperties[] = "'permissionId' can't be null";
        }
            if ((mb_strlen($this->container['permissionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['permissionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'permissionId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^[\\w-]+$/", $this->container['permissionId'])) {
                $invalidProperties[] = "invalid value for 'permissionId', must be conform to the pattern /^[\\w-]+$/.";
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
    * Gets replace
    *  指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    *
    * @return bool|null
    */
    public function getReplace()
    {
        return $this->container['replace'];
    }

    /**
    * Sets replace
    *
    * @param bool|null $replace 指定特定的权限替换或绑定到与资源共享实例关联的现有资源类型。设置为\"true\"可将相同的资源类型的权限替换为当前权限。设置为\"false\"将权限绑定到当前资源类型。默认值为\"false\"。资源共享实例中的每个资源类型只能绑定一个权限。如果资源共享实例中已具有指定资源类型的权限，并且将\"replace\"设置为\"false\"，则操作返回错误。这有助于防止意外覆盖权限。
    *
    * @return $this
    */
    public function setReplace($replace)
    {
        $this->container['replace'] = $replace;
        return $this;
    }

    /**
    * Gets permissionId
    *  共享资源权限的ID。
    *
    * @return string
    */
    public function getPermissionId()
    {
        return $this->container['permissionId'];
    }

    /**
    * Sets permissionId
    *
    * @param string $permissionId 共享资源权限的ID。
    *
    * @return $this
    */
    public function setPermissionId($permissionId)
    {
        $this->container['permissionId'] = $permissionId;
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

