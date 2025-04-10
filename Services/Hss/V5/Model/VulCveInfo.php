<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulCveInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulCveInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cveId  cve id
    * cvss  cve评分
    * vulId  漏洞ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cveId' => 'string',
            'cvss' => 'float',
            'vulId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cveId  cve id
    * cvss  cve评分
    * vulId  漏洞ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cveId' => null,
        'cvss' => 'float',
        'vulId' => null
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
    * cvss  cve评分
    * vulId  漏洞ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cveId' => 'cve_id',
            'cvss' => 'cvss',
            'vulId' => 'vul_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cveId  cve id
    * cvss  cve评分
    * vulId  漏洞ID
    *
    * @var string[]
    */
    protected static $setters = [
            'cveId' => 'setCveId',
            'cvss' => 'setCvss',
            'vulId' => 'setVulId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cveId  cve id
    * cvss  cve评分
    * vulId  漏洞ID
    *
    * @var string[]
    */
    protected static $getters = [
            'cveId' => 'getCveId',
            'cvss' => 'getCvss',
            'vulId' => 'getVulId'
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
        $this->container['cvss'] = isset($data['cvss']) ? $data['cvss'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) > 128)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) < 1)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cvss']) && ($this->container['cvss'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'cvss', must be smaller than or equal to 1E+2.";
            }
            if (!is_null($this->container['cvss']) && ($this->container['cvss'] < 0)) {
                $invalidProperties[] = "invalid value for 'cvss', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 1.";
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
    * Gets cvss
    *  cve评分
    *
    * @return float|null
    */
    public function getCvss()
    {
        return $this->container['cvss'];
    }

    /**
    * Sets cvss
    *
    * @param float|null $cvss cve评分
    *
    * @return $this
    */
    public function setCvss($cvss)
    {
        $this->container['cvss'] = $cvss;
        return $this;
    }

    /**
    * Gets vulId
    *  漏洞ID
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId 漏洞ID
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
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

