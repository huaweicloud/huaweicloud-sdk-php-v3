<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageVulCveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageVulCveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cveId  cve id
    * cvssScore  CVSS分数
    * publishTime  公布时间
    * description  cve描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cveId' => 'string',
            'cvssScore' => 'float',
            'publishTime' => 'int',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cveId  cve id
    * cvssScore  CVSS分数
    * publishTime  公布时间
    * description  cve描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cveId' => null,
        'cvssScore' => 'float',
        'publishTime' => 'int64',
        'description' => null
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
    * cveId  cve id
    * cvssScore  CVSS分数
    * publishTime  公布时间
    * description  cve描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cveId' => 'cve_id',
            'cvssScore' => 'cvss_score',
            'publishTime' => 'publish_time',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cveId  cve id
    * cvssScore  CVSS分数
    * publishTime  公布时间
    * description  cve描述
    *
    * @var string[]
    */
    protected static $setters = [
            'cveId' => 'setCveId',
            'cvssScore' => 'setCvssScore',
            'publishTime' => 'setPublishTime',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cveId  cve id
    * cvssScore  CVSS分数
    * publishTime  公布时间
    * description  cve描述
    *
    * @var string[]
    */
    protected static $getters = [
            'cveId' => 'getCveId',
            'cvssScore' => 'getCvssScore',
            'publishTime' => 'getPublishTime',
            'description' => 'getDescription'
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
        $this->container['cveId'] = isset($data['cveId']) ? $data['cveId'] : null;
        $this->container['cvssScore'] = isset($data['cvssScore']) ? $data['cvssScore'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) > 32)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cvssScore']) && ($this->container['cvssScore'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'cvssScore', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['cvssScore']) && ($this->container['cvssScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'cvssScore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publishTime']) && ($this->container['publishTime'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'publishTime', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['publishTime']) && ($this->container['publishTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'publishTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 65534)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets cveId
    *  cve id
    *
    * @return string|null
    */
    public function getCveId()
    {
        return $this->container['cveId'];
    }

    /**
    * Sets cveId
    *
    * @param string|null $cveId cve id
    *
    * @return $this
    */
    public function setCveId($cveId)
    {
        $this->container['cveId'] = $cveId;
        return $this;
    }

    /**
    * Gets cvssScore
    *  CVSS分数
    *
    * @return float|null
    */
    public function getCvssScore()
    {
        return $this->container['cvssScore'];
    }

    /**
    * Sets cvssScore
    *
    * @param float|null $cvssScore CVSS分数
    *
    * @return $this
    */
    public function setCvssScore($cvssScore)
    {
        $this->container['cvssScore'] = $cvssScore;
        return $this;
    }

    /**
    * Gets publishTime
    *  公布时间
    *
    * @return int|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param int|null $publishTime 公布时间
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets description
    *  cve描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description cve描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

