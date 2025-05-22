<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * packageId  实例id
    * packageName  实例名
    * name  策略名
    * description  描述
    * region  所属region的id
    * cleanThreshold  清洗阈值
    * numProtectedIp  防护ip数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'packageId' => 'string',
            'packageName' => 'string',
            'name' => 'string',
            'description' => 'string',
            'region' => 'string',
            'cleanThreshold' => 'int',
            'numProtectedIp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * packageId  实例id
    * packageName  实例名
    * name  策略名
    * description  描述
    * region  所属region的id
    * cleanThreshold  清洗阈值
    * numProtectedIp  防护ip数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'packageId' => null,
        'packageName' => null,
        'name' => null,
        'description' => null,
        'region' => null,
        'cleanThreshold' => 'int32',
        'numProtectedIp' => 'int32'
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
    * id  id
    * packageId  实例id
    * packageName  实例名
    * name  策略名
    * description  描述
    * region  所属region的id
    * cleanThreshold  清洗阈值
    * numProtectedIp  防护ip数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'packageId' => 'package_id',
            'packageName' => 'package_name',
            'name' => 'name',
            'description' => 'description',
            'region' => 'region',
            'cleanThreshold' => 'clean_threshold',
            'numProtectedIp' => 'num_protected_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * packageId  实例id
    * packageName  实例名
    * name  策略名
    * description  描述
    * region  所属region的id
    * cleanThreshold  清洗阈值
    * numProtectedIp  防护ip数
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'packageId' => 'setPackageId',
            'packageName' => 'setPackageName',
            'name' => 'setName',
            'description' => 'setDescription',
            'region' => 'setRegion',
            'cleanThreshold' => 'setCleanThreshold',
            'numProtectedIp' => 'setNumProtectedIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * packageId  实例id
    * packageName  实例名
    * name  策略名
    * description  描述
    * region  所属region的id
    * cleanThreshold  清洗阈值
    * numProtectedIp  防护ip数
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'packageId' => 'getPackageId',
            'packageName' => 'getPackageName',
            'name' => 'getName',
            'description' => 'getDescription',
            'region' => 'getRegion',
            'cleanThreshold' => 'getCleanThreshold',
            'numProtectedIp' => 'getNumProtectedIp'
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
        $this->container['packageId'] = isset($data['packageId']) ? $data['packageId'] : null;
        $this->container['packageName'] = isset($data['packageName']) ? $data['packageName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['cleanThreshold'] = isset($data['cleanThreshold']) ? $data['cleanThreshold'] : null;
        $this->container['numProtectedIp'] = isset($data['numProtectedIp']) ? $data['numProtectedIp'] : null;
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
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['packageId'] === null) {
            $invalidProperties[] = "'packageId' can't be null";
        }
            if ((mb_strlen($this->container['packageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['packageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'packageId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['packageName'] === null) {
            $invalidProperties[] = "'packageName' can't be null";
        }
            if ((mb_strlen($this->container['packageName']) > 255)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['packageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'packageName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cleanThreshold'] === null) {
            $invalidProperties[] = "'cleanThreshold' can't be null";
        }
            if (($this->container['cleanThreshold'] > 1000)) {
                $invalidProperties[] = "invalid value for 'cleanThreshold', must be smaller than or equal to 1000.";
            }
            if (($this->container['cleanThreshold'] < 100)) {
                $invalidProperties[] = "invalid value for 'cleanThreshold', must be bigger than or equal to 100.";
            }
        if ($this->container['numProtectedIp'] === null) {
            $invalidProperties[] = "'numProtectedIp' can't be null";
        }
            if (($this->container['numProtectedIp'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'numProtectedIp', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['numProtectedIp'] < 0)) {
                $invalidProperties[] = "invalid value for 'numProtectedIp', must be bigger than or equal to 0.";
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
    *  id
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
    * @param string $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets packageId
    *  实例id
    *
    * @return string
    */
    public function getPackageId()
    {
        return $this->container['packageId'];
    }

    /**
    * Sets packageId
    *
    * @param string $packageId 实例id
    *
    * @return $this
    */
    public function setPackageId($packageId)
    {
        $this->container['packageId'] = $packageId;
        return $this;
    }

    /**
    * Gets packageName
    *  实例名
    *
    * @return string
    */
    public function getPackageName()
    {
        return $this->container['packageName'];
    }

    /**
    * Sets packageName
    *
    * @param string $packageName 实例名
    *
    * @return $this
    */
    public function setPackageName($packageName)
    {
        $this->container['packageName'] = $packageName;
        return $this;
    }

    /**
    * Gets name
    *  策略名
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
    * @param string $name 策略名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets region
    *  所属region的id
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 所属region的id
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets cleanThreshold
    *  清洗阈值
    *
    * @return int
    */
    public function getCleanThreshold()
    {
        return $this->container['cleanThreshold'];
    }

    /**
    * Sets cleanThreshold
    *
    * @param int $cleanThreshold 清洗阈值
    *
    * @return $this
    */
    public function setCleanThreshold($cleanThreshold)
    {
        $this->container['cleanThreshold'] = $cleanThreshold;
        return $this;
    }

    /**
    * Gets numProtectedIp
    *  防护ip数
    *
    * @return int
    */
    public function getNumProtectedIp()
    {
        return $this->container['numProtectedIp'];
    }

    /**
    * Sets numProtectedIp
    *
    * @param int $numProtectedIp 防护ip数
    *
    * @return $this
    */
    public function setNumProtectedIp($numProtectedIp)
    {
        $this->container['numProtectedIp'] = $numProtectedIp;
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

