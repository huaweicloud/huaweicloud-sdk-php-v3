<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterSecurityCheckLocalImageVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterSecurityCheckLocalImageVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * localImageName  **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    * localImageVersion  **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    * localImageSize  **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * severityLevel  **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    * solution  **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    * vulDescription  **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'localImageName' => 'string',
            'localImageVersion' => 'string',
            'localImageSize' => 'int',
            'vulName' => 'string',
            'appName' => 'string',
            'appVersion' => 'string',
            'severityLevel' => 'string',
            'solution' => 'string',
            'vulDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * localImageName  **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    * localImageVersion  **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    * localImageSize  **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * severityLevel  **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    * solution  **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    * vulDescription  **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'localImageName' => null,
        'localImageVersion' => null,
        'localImageSize' => 'int64',
        'vulName' => null,
        'appName' => null,
        'appVersion' => null,
        'severityLevel' => null,
        'solution' => null,
        'vulDescription' => null
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
    * localImageName  **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    * localImageVersion  **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    * localImageSize  **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * severityLevel  **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    * solution  **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    * vulDescription  **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'localImageName' => 'local_image_name',
            'localImageVersion' => 'local_image_version',
            'localImageSize' => 'local_image_size',
            'vulName' => 'vul_name',
            'appName' => 'app_name',
            'appVersion' => 'app_version',
            'severityLevel' => 'severity_level',
            'solution' => 'solution',
            'vulDescription' => 'vul_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * localImageName  **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    * localImageVersion  **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    * localImageSize  **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * severityLevel  **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    * solution  **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    * vulDescription  **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'localImageName' => 'setLocalImageName',
            'localImageVersion' => 'setLocalImageVersion',
            'localImageSize' => 'setLocalImageSize',
            'vulName' => 'setVulName',
            'appName' => 'setAppName',
            'appVersion' => 'setAppVersion',
            'severityLevel' => 'setSeverityLevel',
            'solution' => 'setSolution',
            'vulDescription' => 'setVulDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * localImageName  **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    * localImageVersion  **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    * localImageSize  **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    * appName  **参数解释**： 软件名称 **取值范围**： 不涉及
    * appVersion  **参数解释**： 软件版本 **取值范围**： 不涉及
    * severityLevel  **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    * solution  **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    * vulDescription  **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'localImageName' => 'getLocalImageName',
            'localImageVersion' => 'getLocalImageVersion',
            'localImageSize' => 'getLocalImageSize',
            'vulName' => 'getVulName',
            'appName' => 'getAppName',
            'appVersion' => 'getAppVersion',
            'severityLevel' => 'getSeverityLevel',
            'solution' => 'getSolution',
            'vulDescription' => 'getVulDescription'
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
    const SEVERITY_LEVEL_HIGH = 'High';
    const SEVERITY_LEVEL_MEDIUM = 'Medium';
    const SEVERITY_LEVEL_LOW = 'Low';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityLevelAllowableValues()
    {
        return [
            self::SEVERITY_LEVEL_HIGH,
            self::SEVERITY_LEVEL_MEDIUM,
            self::SEVERITY_LEVEL_LOW,
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
        $this->container['localImageName'] = isset($data['localImageName']) ? $data['localImageName'] : null;
        $this->container['localImageVersion'] = isset($data['localImageVersion']) ? $data['localImageVersion'] : null;
        $this->container['localImageSize'] = isset($data['localImageSize']) ? $data['localImageSize'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['vulDescription'] = isset($data['vulDescription']) ? $data['vulDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['localImageName']) && (mb_strlen($this->container['localImageName']) > 256)) {
                $invalidProperties[] = "invalid value for 'localImageName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['localImageName']) && (mb_strlen($this->container['localImageName']) < 1)) {
                $invalidProperties[] = "invalid value for 'localImageName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['localImageVersion']) && (mb_strlen($this->container['localImageVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'localImageVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['localImageVersion']) && (mb_strlen($this->container['localImageVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'localImageVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 512)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityLevelAllowableValues();
                if (!is_null($this->container['severityLevel']) && !in_array($this->container['severityLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severityLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
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
    * Gets localImageName
    *  **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getLocalImageName()
    {
        return $this->container['localImageName'];
    }

    /**
    * Sets localImageName
    *
    * @param string|null $localImageName **参数解释**： 本地镜像名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalImageName($localImageName)
    {
        $this->container['localImageName'] = $localImageName;
        return $this;
    }

    /**
    * Gets localImageVersion
    *  **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getLocalImageVersion()
    {
        return $this->container['localImageVersion'];
    }

    /**
    * Sets localImageVersion
    *
    * @param string|null $localImageVersion **参数解释**： 本地镜像版本 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalImageVersion($localImageVersion)
    {
        $this->container['localImageVersion'] = $localImageVersion;
        return $this;
    }

    /**
    * Gets localImageSize
    *  **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getLocalImageSize()
    {
        return $this->container['localImageSize'];
    }

    /**
    * Sets localImageSize
    *
    * @param int|null $localImageSize **参数解释**： 本地镜像大小 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setLocalImageSize($localImageSize)
    {
        $this->container['localImageSize'] = $localImageSize;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**： 漏洞名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**： 漏洞名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**： 软件名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**： 软件名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**： 软件版本 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**： 软件版本 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释**： 漏洞危险程度 **取值范围**： - High：高危漏洞 - Medium：中危漏洞 - Low：低危漏洞
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets solution
    *  **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution **参数解释**： 漏洞解决方案 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets vulDescription
    *  **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getVulDescription()
    {
        return $this->container['vulDescription'];
    }

    /**
    * Sets vulDescription
    *
    * @param string|null $vulDescription **参数解释**： 漏洞描述 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setVulDescription($vulDescription)
    {
        $this->container['vulDescription'] = $vulDescription;
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

