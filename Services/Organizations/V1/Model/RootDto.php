<?php

namespace HuaweiCloud\SDK\Organizations\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RootDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RootDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  根的唯一标识符（ID）。
    * urn  根的统一资源名称。
    * name  根的名称。
    * policyTypes  策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    * createdAt  根的创建时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'urn' => 'string',
            'name' => 'string',
            'policyTypes' => '\HuaweiCloud\SDK\Organizations\V1\Model\PolicyTypeSummaryDto[]',
            'createdAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  根的唯一标识符（ID）。
    * urn  根的统一资源名称。
    * name  根的名称。
    * policyTypes  策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    * createdAt  根的创建时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'urn' => null,
        'name' => null,
        'policyTypes' => null,
        'createdAt' => 'date-time'
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
    * id  根的唯一标识符（ID）。
    * urn  根的统一资源名称。
    * name  根的名称。
    * policyTypes  策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    * createdAt  根的创建时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'urn' => 'urn',
            'name' => 'name',
            'policyTypes' => 'policy_types',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  根的唯一标识符（ID）。
    * urn  根的统一资源名称。
    * name  根的名称。
    * policyTypes  策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    * createdAt  根的创建时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'urn' => 'setUrn',
            'name' => 'setName',
            'policyTypes' => 'setPolicyTypes',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  根的唯一标识符（ID）。
    * urn  根的统一资源名称。
    * name  根的名称。
    * policyTypes  策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    * createdAt  根的创建时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'urn' => 'getUrn',
            'name' => 'getName',
            'policyTypes' => 'getPolicyTypes',
            'createdAt' => 'getCreatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['policyTypes'] = isset($data['policyTypes']) ? $data['policyTypes'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 34)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 34.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^r-[0-9a-z]{4,32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^r-[0-9a-z]{4,32}$/.";
            }
        if ($this->container['urn'] === null) {
            $invalidProperties[] = "'urn' can't be null";
        }
            if ((mb_strlen($this->container['urn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be smaller than or equal to 1500.";
            }
            if ((mb_strlen($this->container['urn']) < 1)) {
                $invalidProperties[] = "invalid value for 'urn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z][0-9a-zA-Z_-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z][0-9a-zA-Z_-]+$/.";
            }
        if ($this->container['policyTypes'] === null) {
            $invalidProperties[] = "'policyTypes' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    *  根的唯一标识符（ID）。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 根的唯一标识符（ID）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets urn
    *  根的统一资源名称。
    *
    * @return string
    */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
    * Sets urn
    *
    * @param string $urn 根的统一资源名称。
    *
    * @return $this
    */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;
        return $this;
    }

    /**
    * Gets name
    *  根的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 根的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets policyTypes
    *  策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    *
    * @return \HuaweiCloud\SDK\Organizations\V1\Model\PolicyTypeSummaryDto[]
    */
    public function getPolicyTypes()
    {
        return $this->container['policyTypes'];
    }

    /**
    * Sets policyTypes
    *
    * @param \HuaweiCloud\SDK\Organizations\V1\Model\PolicyTypeSummaryDto[] $policyTypes 策略类型在当前根已启用，则该类型策略可以绑定到根或其组织单元或账号。
    *
    * @return $this
    */
    public function setPolicyTypes($policyTypes)
    {
        $this->container['policyTypes'] = $policyTypes;
        return $this;
    }

    /**
    * Gets createdAt
    *  根的创建时间。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 根的创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

