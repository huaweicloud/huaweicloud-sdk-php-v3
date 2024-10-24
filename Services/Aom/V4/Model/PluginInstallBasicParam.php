<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PluginInstallBasicParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PluginInstallBasicParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * installVersion  指定安装的ICAgent版本。
    * domainAk  IAM账号AK，选填。.
    * domainSk  IAM账号SK，选填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'installVersion' => 'string',
            'domainAk' => 'string',
            'domainSk' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * installVersion  指定安装的ICAgent版本。
    * domainAk  IAM账号AK，选填。.
    * domainSk  IAM账号SK，选填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'installVersion' => null,
        'domainAk' => null,
        'domainSk' => null
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
    * installVersion  指定安装的ICAgent版本。
    * domainAk  IAM账号AK，选填。.
    * domainSk  IAM账号SK，选填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'installVersion' => 'install_version',
            'domainAk' => 'domain_ak',
            'domainSk' => 'domain_sk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * installVersion  指定安装的ICAgent版本。
    * domainAk  IAM账号AK，选填。.
    * domainSk  IAM账号SK，选填。
    *
    * @var string[]
    */
    protected static $setters = [
            'installVersion' => 'setInstallVersion',
            'domainAk' => 'setDomainAk',
            'domainSk' => 'setDomainSk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * installVersion  指定安装的ICAgent版本。
    * domainAk  IAM账号AK，选填。.
    * domainSk  IAM账号SK，选填。
    *
    * @var string[]
    */
    protected static $getters = [
            'installVersion' => 'getInstallVersion',
            'domainAk' => 'getDomainAk',
            'domainSk' => 'getDomainSk'
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
        $this->container['installVersion'] = isset($data['installVersion']) ? $data['installVersion'] : null;
        $this->container['domainAk'] = isset($data['domainAk']) ? $data['domainAk'] : null;
        $this->container['domainSk'] = isset($data['domainSk']) ? $data['domainSk'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets installVersion
    *  指定安装的ICAgent版本。
    *
    * @return string|null
    */
    public function getInstallVersion()
    {
        return $this->container['installVersion'];
    }

    /**
    * Sets installVersion
    *
    * @param string|null $installVersion 指定安装的ICAgent版本。
    *
    * @return $this
    */
    public function setInstallVersion($installVersion)
    {
        $this->container['installVersion'] = $installVersion;
        return $this;
    }

    /**
    * Gets domainAk
    *  IAM账号AK，选填。.
    *
    * @return string|null
    */
    public function getDomainAk()
    {
        return $this->container['domainAk'];
    }

    /**
    * Sets domainAk
    *
    * @param string|null $domainAk IAM账号AK，选填。.
    *
    * @return $this
    */
    public function setDomainAk($domainAk)
    {
        $this->container['domainAk'] = $domainAk;
        return $this;
    }

    /**
    * Gets domainSk
    *  IAM账号SK，选填。
    *
    * @return string|null
    */
    public function getDomainSk()
    {
        return $this->container['domainSk'];
    }

    /**
    * Sets domainSk
    *
    * @param string|null $domainSk IAM账号SK，选填。
    *
    * @return $this
    */
    public function setDomainSk($domainSk)
    {
        $this->container['domainSk'] = $domainSk;
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

