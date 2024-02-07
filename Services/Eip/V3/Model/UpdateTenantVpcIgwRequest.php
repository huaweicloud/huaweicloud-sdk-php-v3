<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTenantVpcIgwRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTenantVpcIgwRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * vpcIgwId  vpc-igw的uuid
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string',
            'vpcIgwId' => 'string',
            'body' => '\HuaweiCloud\SDK\Eip\V3\Model\UpdateTenantVpcIgwRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * vpcIgwId  vpc-igw的uuid
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'vpcIgwId' => null,
        'body' => null
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
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * vpcIgwId  vpc-igw的uuid
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'vpcIgwId' => 'vpc_igw_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * vpcIgwId  vpc-igw的uuid
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'vpcIgwId' => 'setVpcIgwId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    * vpcIgwId  vpc-igw的uuid
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'vpcIgwId' => 'getVpcIgwId',
            'body' => 'getBody'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['vpcIgwId'] = isset($data['vpcIgwId']) ? $data['vpcIgwId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fields']) && (mb_strlen($this->container['fields']) < 0)) {
                $invalidProperties[] = "invalid value for 'fields', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpcIgwId'] === null) {
            $invalidProperties[] = "'vpcIgwId' can't be null";
        }
            if ((mb_strlen($this->container['vpcIgwId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcIgwId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['vpcIgwId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcIgwId', the character length must be bigger than or equal to 1.";
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
    * Gets fields
    *  形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    *
    * @return string|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string|null $fields 形式为\\\"fields=id&fields=project_id&...\\\"，支持字段：id/project_id/vpc_id/created_at/updated_at/name
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets vpcIgwId
    *  vpc-igw的uuid
    *
    * @return string
    */
    public function getVpcIgwId()
    {
        return $this->container['vpcIgwId'];
    }

    /**
    * Sets vpcIgwId
    *
    * @param string $vpcIgwId vpc-igw的uuid
    *
    * @return $this
    */
    public function setVpcIgwId($vpcIgwId)
    {
        $this->container['vpcIgwId'] = $vpcIgwId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Eip\V3\Model\UpdateTenantVpcIgwRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Eip\V3\Model\UpdateTenantVpcIgwRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

