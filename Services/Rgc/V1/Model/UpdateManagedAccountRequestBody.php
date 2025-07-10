<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateManagedAccountRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateManagedAccountRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentOrganizationalUnitId' => 'string',
            'parentOrganizationalUnitName' => 'string',
            'blueprint' => '\HuaweiCloud\SDK\Rgc\V1\Model\Blueprint'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentOrganizationalUnitId' => null,
        'parentOrganizationalUnitName' => null,
        'blueprint' => null
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
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentOrganizationalUnitId' => 'parent_organizational_unit_id',
            'parentOrganizationalUnitName' => 'parent_organizational_unit_name',
            'blueprint' => 'blueprint'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $setters = [
            'parentOrganizationalUnitId' => 'setParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'setParentOrganizationalUnitName',
            'blueprint' => 'setBlueprint'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentOrganizationalUnitId  父注册OU ID。
    * parentOrganizationalUnitName  父注册OU名称。
    * blueprint  blueprint
    *
    * @var string[]
    */
    protected static $getters = [
            'parentOrganizationalUnitId' => 'getParentOrganizationalUnitId',
            'parentOrganizationalUnitName' => 'getParentOrganizationalUnitName',
            'blueprint' => 'getBlueprint'
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
        $this->container['parentOrganizationalUnitId'] = isset($data['parentOrganizationalUnitId']) ? $data['parentOrganizationalUnitId'] : null;
        $this->container['parentOrganizationalUnitName'] = isset($data['parentOrganizationalUnitName']) ? $data['parentOrganizationalUnitName'] : null;
        $this->container['blueprint'] = isset($data['blueprint']) ? $data['blueprint'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parentOrganizationalUnitId'] === null) {
            $invalidProperties[] = "'parentOrganizationalUnitId' can't be null";
        }
            if ((mb_strlen($this->container['parentOrganizationalUnitId']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentOrganizationalUnitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/", $this->container['parentOrganizationalUnitId'])) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitId', must be conform to the pattern /^(?:r-[0-9a-z]{4,32}|ou-[0-9a-z]{8,32})$/.";
            }
        if ($this->container['parentOrganizationalUnitName'] === null) {
            $invalidProperties[] = "'parentOrganizationalUnitName' can't be null";
        }
            if ((mb_strlen($this->container['parentOrganizationalUnitName']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentOrganizationalUnitName']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/", $this->container['parentOrganizationalUnitName'])) {
                $invalidProperties[] = "invalid value for 'parentOrganizationalUnitName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9\\_\\- ]+$/.";
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
    * Gets parentOrganizationalUnitId
    *  父注册OU ID。
    *
    * @return string
    */
    public function getParentOrganizationalUnitId()
    {
        return $this->container['parentOrganizationalUnitId'];
    }

    /**
    * Sets parentOrganizationalUnitId
    *
    * @param string $parentOrganizationalUnitId 父注册OU ID。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitId($parentOrganizationalUnitId)
    {
        $this->container['parentOrganizationalUnitId'] = $parentOrganizationalUnitId;
        return $this;
    }

    /**
    * Gets parentOrganizationalUnitName
    *  父注册OU名称。
    *
    * @return string
    */
    public function getParentOrganizationalUnitName()
    {
        return $this->container['parentOrganizationalUnitName'];
    }

    /**
    * Sets parentOrganizationalUnitName
    *
    * @param string $parentOrganizationalUnitName 父注册OU名称。
    *
    * @return $this
    */
    public function setParentOrganizationalUnitName($parentOrganizationalUnitName)
    {
        $this->container['parentOrganizationalUnitName'] = $parentOrganizationalUnitName;
        return $this;
    }

    /**
    * Gets blueprint
    *  blueprint
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\Blueprint|null
    */
    public function getBlueprint()
    {
        return $this->container['blueprint'];
    }

    /**
    * Sets blueprint
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\Blueprint|null $blueprint blueprint
    *
    * @return $this
    */
    public function setBlueprint($blueprint)
    {
        $this->container['blueprint'] = $blueprint;
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

