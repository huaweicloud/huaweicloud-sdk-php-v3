<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Dependency implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Dependency';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    * instanceId  **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    * instanceName  **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    * instanceId  **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    * instanceName  **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'instanceId' => null,
        'instanceName' => null
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
    * type  **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    * instanceId  **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    * instanceName  **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    * instanceId  **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    * instanceName  **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    * instanceId  **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    * instanceName  **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
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
    * Gets type
    *  **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**： IP地址组关联的资源类型。 **取值范围**： - sg：IP地址组关联的安全组。 - acl：IP地址组关联的网络ACL。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**： IP地址组关联资源的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName **参数解释**： IP地址组关联资源的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
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

