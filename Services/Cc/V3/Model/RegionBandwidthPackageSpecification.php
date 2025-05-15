<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegionBandwidthPackageSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegionBandwidthPackageSpecification';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localRegionId  RegionID。
    * remoteRegionId  RegionID。
    * id  互通Region带宽包的规格ID。
    * name  互通Region带宽包的规格名字。
    * enName  互通Region带宽包的规格英文名字。
    * esName  互通Region带宽包的规格西语名字。
    * ptName  互通Region带宽包的规格葡语名字。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localRegionId' => 'string',
            'remoteRegionId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'enName' => 'string',
            'esName' => 'string',
            'ptName' => 'string',
            'specCodes' => '\HuaweiCloud\SDK\Cc\V3\Model\SpecificationCodeInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localRegionId  RegionID。
    * remoteRegionId  RegionID。
    * id  互通Region带宽包的规格ID。
    * name  互通Region带宽包的规格名字。
    * enName  互通Region带宽包的规格英文名字。
    * esName  互通Region带宽包的规格西语名字。
    * ptName  互通Region带宽包的规格葡语名字。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localRegionId' => null,
        'remoteRegionId' => null,
        'id' => null,
        'name' => null,
        'enName' => null,
        'esName' => null,
        'ptName' => null,
        'specCodes' => null
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
    * localRegionId  RegionID。
    * remoteRegionId  RegionID。
    * id  互通Region带宽包的规格ID。
    * name  互通Region带宽包的规格名字。
    * enName  互通Region带宽包的规格英文名字。
    * esName  互通Region带宽包的规格西语名字。
    * ptName  互通Region带宽包的规格葡语名字。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localRegionId' => 'local_region_id',
            'remoteRegionId' => 'remote_region_id',
            'id' => 'id',
            'name' => 'name',
            'enName' => 'en_name',
            'esName' => 'es_name',
            'ptName' => 'pt_name',
            'specCodes' => 'spec_codes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localRegionId  RegionID。
    * remoteRegionId  RegionID。
    * id  互通Region带宽包的规格ID。
    * name  互通Region带宽包的规格名字。
    * enName  互通Region带宽包的规格英文名字。
    * esName  互通Region带宽包的规格西语名字。
    * ptName  互通Region带宽包的规格葡语名字。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'localRegionId' => 'setLocalRegionId',
            'remoteRegionId' => 'setRemoteRegionId',
            'id' => 'setId',
            'name' => 'setName',
            'enName' => 'setEnName',
            'esName' => 'setEsName',
            'ptName' => 'setPtName',
            'specCodes' => 'setSpecCodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localRegionId  RegionID。
    * remoteRegionId  RegionID。
    * id  互通Region带宽包的规格ID。
    * name  互通Region带宽包的规格名字。
    * enName  互通Region带宽包的规格英文名字。
    * esName  互通Region带宽包的规格西语名字。
    * ptName  互通Region带宽包的规格葡语名字。
    * specCodes  带宽包产品规格列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'localRegionId' => 'getLocalRegionId',
            'remoteRegionId' => 'getRemoteRegionId',
            'id' => 'getId',
            'name' => 'getName',
            'enName' => 'getEnName',
            'esName' => 'getEsName',
            'ptName' => 'getPtName',
            'specCodes' => 'getSpecCodes'
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
        $this->container['localRegionId'] = isset($data['localRegionId']) ? $data['localRegionId'] : null;
        $this->container['remoteRegionId'] = isset($data['remoteRegionId']) ? $data['remoteRegionId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['esName'] = isset($data['esName']) ? $data['esName'] : null;
        $this->container['ptName'] = isset($data['ptName']) ? $data['ptName'] : null;
        $this->container['specCodes'] = isset($data['specCodes']) ? $data['specCodes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['localRegionId'] === null) {
            $invalidProperties[] = "'localRegionId' can't be null";
        }
            if ((mb_strlen($this->container['localRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'localRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['localRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'localRegionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['remoteRegionId'] === null) {
            $invalidProperties[] = "'remoteRegionId' can't be null";
        }
            if ((mb_strlen($this->container['remoteRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'remoteRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['remoteRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'remoteRegionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 36)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) > 36)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enName']) && (mb_strlen($this->container['enName']) < 1)) {
                $invalidProperties[] = "invalid value for 'enName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['esName']) && (mb_strlen($this->container['esName']) > 36)) {
                $invalidProperties[] = "invalid value for 'esName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['esName']) && (mb_strlen($this->container['esName']) < 1)) {
                $invalidProperties[] = "invalid value for 'esName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ptName']) && (mb_strlen($this->container['ptName']) > 36)) {
                $invalidProperties[] = "invalid value for 'ptName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['ptName']) && (mb_strlen($this->container['ptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ptName', the character length must be bigger than or equal to 1.";
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
    * Gets localRegionId
    *  RegionID。
    *
    * @return string
    */
    public function getLocalRegionId()
    {
        return $this->container['localRegionId'];
    }

    /**
    * Sets localRegionId
    *
    * @param string $localRegionId RegionID。
    *
    * @return $this
    */
    public function setLocalRegionId($localRegionId)
    {
        $this->container['localRegionId'] = $localRegionId;
        return $this;
    }

    /**
    * Gets remoteRegionId
    *  RegionID。
    *
    * @return string
    */
    public function getRemoteRegionId()
    {
        return $this->container['remoteRegionId'];
    }

    /**
    * Sets remoteRegionId
    *
    * @param string $remoteRegionId RegionID。
    *
    * @return $this
    */
    public function setRemoteRegionId($remoteRegionId)
    {
        $this->container['remoteRegionId'] = $remoteRegionId;
        return $this;
    }

    /**
    * Gets id
    *  互通Region带宽包的规格ID。
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
    * @param string|null $id 互通Region带宽包的规格ID。
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
    *  互通Region带宽包的规格名字。
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
    * @param string|null $name 互通Region带宽包的规格名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets enName
    *  互通Region带宽包的规格英文名字。
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName 互通Region带宽包的规格英文名字。
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets esName
    *  互通Region带宽包的规格西语名字。
    *
    * @return string|null
    */
    public function getEsName()
    {
        return $this->container['esName'];
    }

    /**
    * Sets esName
    *
    * @param string|null $esName 互通Region带宽包的规格西语名字。
    *
    * @return $this
    */
    public function setEsName($esName)
    {
        $this->container['esName'] = $esName;
        return $this;
    }

    /**
    * Gets ptName
    *  互通Region带宽包的规格葡语名字。
    *
    * @return string|null
    */
    public function getPtName()
    {
        return $this->container['ptName'];
    }

    /**
    * Sets ptName
    *
    * @param string|null $ptName 互通Region带宽包的规格葡语名字。
    *
    * @return $this
    */
    public function setPtName($ptName)
    {
        $this->container['ptName'] = $ptName;
        return $this;
    }

    /**
    * Gets specCodes
    *  带宽包产品规格列表。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SpecificationCodeInfo[]|null
    */
    public function getSpecCodes()
    {
        return $this->container['specCodes'];
    }

    /**
    * Sets specCodes
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SpecificationCodeInfo[]|null $specCodes 带宽包产品规格列表。
    *
    * @return $this
    */
    public function setSpecCodes($specCodes)
    {
        $this->container['specCodes'] = $specCodes;
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

