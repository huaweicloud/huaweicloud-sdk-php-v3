<?php

namespace HuaweiCloud\SDK\Eps\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssociatedResourcesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssociatedResourcesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID
    * name  资源名称
    * type  关联的资源类型
    * associatedResources  关联资源列表
    * errors  错误信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'associatedResources' => '\HuaweiCloud\SDK\Eps\V1\Model\AssociatedResourceListResponse[]',
            'errors' => '\HuaweiCloud\SDK\Eps\V1\Model\ResourceErrorListResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID
    * name  资源名称
    * type  关联的资源类型
    * associatedResources  关联资源列表
    * errors  错误信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'associatedResources' => null,
        'errors' => null
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
    * id  资源ID
    * name  资源名称
    * type  关联的资源类型
    * associatedResources  关联资源列表
    * errors  错误信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'associatedResources' => 'associated_resources',
            'errors' => 'errors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID
    * name  资源名称
    * type  关联的资源类型
    * associatedResources  关联资源列表
    * errors  错误信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'associatedResources' => 'setAssociatedResources',
            'errors' => 'setErrors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID
    * name  资源名称
    * type  关联的资源类型
    * associatedResources  关联资源列表
    * errors  错误信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'associatedResources' => 'getAssociatedResources',
            'errors' => 'getErrors'
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
    const TYPE_ECS = 'ecs';
    const TYPE_EIP = 'eip';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ECS,
            self::TYPE_EIP,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['associatedResources'] = isset($data['associatedResources']) ? $data['associatedResources'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets id
    *  资源ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 资源ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  资源名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  关联的资源类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 关联的资源类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets associatedResources
    *  关联资源列表
    *
    * @return \HuaweiCloud\SDK\Eps\V1\Model\AssociatedResourceListResponse[]|null
    */
    public function getAssociatedResources()
    {
        return $this->container['associatedResources'];
    }

    /**
    * Sets associatedResources
    *
    * @param \HuaweiCloud\SDK\Eps\V1\Model\AssociatedResourceListResponse[]|null $associatedResources 关联资源列表
    *
    * @return $this
    */
    public function setAssociatedResources($associatedResources)
    {
        $this->container['associatedResources'] = $associatedResources;
        return $this;
    }

    /**
    * Gets errors
    *  错误信息列表
    *
    * @return \HuaweiCloud\SDK\Eps\V1\Model\ResourceErrorListResponse[]|null
    */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
    * Sets errors
    *
    * @param \HuaweiCloud\SDK\Eps\V1\Model\ResourceErrorListResponse[]|null $errors 错误信息列表
    *
    * @return $this
    */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;
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

