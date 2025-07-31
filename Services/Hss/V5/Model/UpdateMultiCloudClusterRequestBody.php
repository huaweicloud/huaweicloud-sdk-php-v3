<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMultiCloudClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMultiCloudClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentExpirationDate  当前有效期结束时间
    * upgrade  是否升级代理版本
    * kubeconfig  kubeconfig文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentExpirationDate' => 'int',
            'upgrade' => 'bool',
            'kubeconfig' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentExpirationDate  当前有效期结束时间
    * upgrade  是否升级代理版本
    * kubeconfig  kubeconfig文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentExpirationDate' => 'int64',
        'upgrade' => null,
        'kubeconfig' => null
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
    * currentExpirationDate  当前有效期结束时间
    * upgrade  是否升级代理版本
    * kubeconfig  kubeconfig文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentExpirationDate' => 'current_expiration_date',
            'upgrade' => 'upgrade',
            'kubeconfig' => 'kubeconfig'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentExpirationDate  当前有效期结束时间
    * upgrade  是否升级代理版本
    * kubeconfig  kubeconfig文件
    *
    * @var string[]
    */
    protected static $setters = [
            'currentExpirationDate' => 'setCurrentExpirationDate',
            'upgrade' => 'setUpgrade',
            'kubeconfig' => 'setKubeconfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentExpirationDate  当前有效期结束时间
    * upgrade  是否升级代理版本
    * kubeconfig  kubeconfig文件
    *
    * @var string[]
    */
    protected static $getters = [
            'currentExpirationDate' => 'getCurrentExpirationDate',
            'upgrade' => 'getUpgrade',
            'kubeconfig' => 'getKubeconfig'
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
        $this->container['currentExpirationDate'] = isset($data['currentExpirationDate']) ? $data['currentExpirationDate'] : null;
        $this->container['upgrade'] = isset($data['upgrade']) ? $data['upgrade'] : null;
        $this->container['kubeconfig'] = isset($data['kubeconfig']) ? $data['kubeconfig'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['currentExpirationDate'] === null) {
            $invalidProperties[] = "'currentExpirationDate' can't be null";
        }
            if (($this->container['currentExpirationDate'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'currentExpirationDate', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['currentExpirationDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'currentExpirationDate', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kubeconfig']) && (mb_strlen($this->container['kubeconfig']) > 20480)) {
                $invalidProperties[] = "invalid value for 'kubeconfig', the character length must be smaller than or equal to 20480.";
            }
            if (!is_null($this->container['kubeconfig']) && (mb_strlen($this->container['kubeconfig']) < 1)) {
                $invalidProperties[] = "invalid value for 'kubeconfig', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['kubeconfig']) && !preg_match("/^.*$/", $this->container['kubeconfig'])) {
                $invalidProperties[] = "invalid value for 'kubeconfig', must be conform to the pattern /^.*$/.";
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
    * Gets currentExpirationDate
    *  当前有效期结束时间
    *
    * @return int
    */
    public function getCurrentExpirationDate()
    {
        return $this->container['currentExpirationDate'];
    }

    /**
    * Sets currentExpirationDate
    *
    * @param int $currentExpirationDate 当前有效期结束时间
    *
    * @return $this
    */
    public function setCurrentExpirationDate($currentExpirationDate)
    {
        $this->container['currentExpirationDate'] = $currentExpirationDate;
        return $this;
    }

    /**
    * Gets upgrade
    *  是否升级代理版本
    *
    * @return bool|null
    */
    public function getUpgrade()
    {
        return $this->container['upgrade'];
    }

    /**
    * Sets upgrade
    *
    * @param bool|null $upgrade 是否升级代理版本
    *
    * @return $this
    */
    public function setUpgrade($upgrade)
    {
        $this->container['upgrade'] = $upgrade;
        return $this;
    }

    /**
    * Gets kubeconfig
    *  kubeconfig文件
    *
    * @return string|null
    */
    public function getKubeconfig()
    {
        return $this->container['kubeconfig'];
    }

    /**
    * Sets kubeconfig
    *
    * @param string|null $kubeconfig kubeconfig文件
    *
    * @return $this
    */
    public function setKubeconfig($kubeconfig)
    {
        $this->container['kubeconfig'] = $kubeconfig;
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

