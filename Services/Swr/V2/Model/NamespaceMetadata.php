<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NamespaceMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NamespaceMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * public  是否公开，可选true、false
    * autoScan  上传制品时，是否自动触发制品扫描，可选true、false
    * preventVul  是否开启制品阻断，可选true、false
    * severity  阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'public' => 'string',
            'autoScan' => 'string',
            'preventVul' => 'string',
            'severity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * public  是否公开，可选true、false
    * autoScan  上传制品时，是否自动触发制品扫描，可选true、false
    * preventVul  是否开启制品阻断，可选true、false
    * severity  阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'public' => null,
        'autoScan' => null,
        'preventVul' => null,
        'severity' => null
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
    * public  是否公开，可选true、false
    * autoScan  上传制品时，是否自动触发制品扫描，可选true、false
    * preventVul  是否开启制品阻断，可选true、false
    * severity  阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'public' => 'public',
            'autoScan' => 'auto_scan',
            'preventVul' => 'prevent_vul',
            'severity' => 'severity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * public  是否公开，可选true、false
    * autoScan  上传制品时，是否自动触发制品扫描，可选true、false
    * preventVul  是否开启制品阻断，可选true、false
    * severity  阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'public' => 'setPublic',
            'autoScan' => 'setAutoScan',
            'preventVul' => 'setPreventVul',
            'severity' => 'setSeverity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * public  是否公开，可选true、false
    * autoScan  上传制品时，是否自动触发制品扫描，可选true、false
    * preventVul  是否开启制品阻断，可选true、false
    * severity  阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'public' => 'getPublic',
            'autoScan' => 'getAutoScan',
            'preventVul' => 'getPreventVul',
            'severity' => 'getSeverity'
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
    const MODEL_PUBLIC_TRUE = 'true';
    const MODEL_PUBLIC_FALSE = 'false';
    const AUTO_SCAN_TRUE = 'true';
    const AUTO_SCAN_FALSE = 'false';
    const PREVENT_VUL_TRUE = 'true';
    const PREVENT_VUL_FALSE = 'false';
    const SEVERITY_NONE = 'none';
    const SEVERITY_LOW = 'low';
    const SEVERITY_MEDIUM = 'medium';
    const SEVERITY_HIGH = 'high';
    const SEVERITY_CRITICAL = 'critical';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPublicAllowableValues()
    {
        return [
            self::MODEL_PUBLIC_TRUE,
            self::MODEL_PUBLIC_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoScanAllowableValues()
    {
        return [
            self::AUTO_SCAN_TRUE,
            self::AUTO_SCAN_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPreventVulAllowableValues()
    {
        return [
            self::PREVENT_VUL_TRUE,
            self::PREVENT_VUL_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_NONE,
            self::SEVERITY_LOW,
            self::SEVERITY_MEDIUM,
            self::SEVERITY_HIGH,
            self::SEVERITY_CRITICAL,
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
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['autoScan'] = isset($data['autoScan']) ? $data['autoScan'] : null;
        $this->container['preventVul'] = isset($data['preventVul']) ? $data['preventVul'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['public'] === null) {
            $invalidProperties[] = "'public' can't be null";
        }
            $allowedValues = $this->getPublicAllowableValues();
                if (!is_null($this->container['public']) && !in_array($this->container['public'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'public', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAutoScanAllowableValues();
                if (!is_null($this->container['autoScan']) && !in_array($this->container['autoScan'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoScan', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPreventVulAllowableValues();
                if (!is_null($this->container['preventVul']) && !in_array($this->container['preventVul'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'preventVul', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
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
    * Gets public
    *  是否公开，可选true、false
    *
    * @return string
    */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
    * Sets public
    *
    * @param string $public 是否公开，可选true、false
    *
    * @return $this
    */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
        return $this;
    }

    /**
    * Gets autoScan
    *  上传制品时，是否自动触发制品扫描，可选true、false
    *
    * @return string|null
    */
    public function getAutoScan()
    {
        return $this->container['autoScan'];
    }

    /**
    * Sets autoScan
    *
    * @param string|null $autoScan 上传制品时，是否自动触发制品扫描，可选true、false
    *
    * @return $this
    */
    public function setAutoScan($autoScan)
    {
        $this->container['autoScan'] = $autoScan;
        return $this;
    }

    /**
    * Gets preventVul
    *  是否开启制品阻断，可选true、false
    *
    * @return string|null
    */
    public function getPreventVul()
    {
        return $this->container['preventVul'];
    }

    /**
    * Sets preventVul
    *
    * @param string|null $preventVul 是否开启制品阻断，可选true、false
    *
    * @return $this
    */
    public function setPreventVul($preventVul)
    {
        $this->container['preventVul'] = $preventVul;
        return $this;
    }

    /**
    * Gets severity
    *  阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 阻断开启的场景下，如果存在漏洞，并且存在的漏洞严重程度高于此处定义的级别，则无法拉取镜像。可选值为\"none\", \"low\", \"medium\", \"high\", \"critical\"。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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

