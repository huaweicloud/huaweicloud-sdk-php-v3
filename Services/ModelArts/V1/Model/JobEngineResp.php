<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobEngineResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobEngineResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineId  **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    * engineName  **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    * engineVersion  **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    * imageUrl  **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    * installSysPackages  **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineId' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'imageUrl' => 'string',
            'installSysPackages' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineId  **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    * engineName  **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    * engineVersion  **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    * imageUrl  **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    * installSysPackages  **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineId' => null,
        'engineName' => null,
        'engineVersion' => null,
        'imageUrl' => null,
        'installSysPackages' => null
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
    * engineId  **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    * engineName  **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    * engineVersion  **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    * imageUrl  **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    * installSysPackages  **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineId' => 'engine_id',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'imageUrl' => 'image_url',
            'installSysPackages' => 'install_sys_packages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineId  **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    * engineName  **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    * engineVersion  **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    * imageUrl  **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    * installSysPackages  **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @var string[]
    */
    protected static $setters = [
            'engineId' => 'setEngineId',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'imageUrl' => 'setImageUrl',
            'installSysPackages' => 'setInstallSysPackages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineId  **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    * engineName  **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    * engineVersion  **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    * imageUrl  **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    * installSysPackages  **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @var string[]
    */
    protected static $getters = [
            'engineId' => 'getEngineId',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'imageUrl' => 'getImageUrl',
            'installSysPackages' => 'getInstallSysPackages'
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
        $this->container['engineId'] = isset($data['engineId']) ? $data['engineId'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['installSysPackages'] = isset($data['installSysPackages']) ? $data['installSysPackages'] : null;
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
    * Gets engineId
    *  **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEngineId()
    {
        return $this->container['engineId'];
    }

    /**
    * Sets engineId
    *
    * @param string|null $engineId **参数解释**：训练作业选择的引擎规格ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEngineId($engineId)
    {
        $this->container['engineId'] = $engineId;
        return $this;
    }

    /**
    * Gets engineName
    *  **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName **参数解释**：训练作业选择的引擎规格名称。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion **参数解释**：训练作业选择的引擎规格版本。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets imageUrl
    *  **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl **参数解释**：训练作业选择的自定义镜像地址，地址从swr服务获取。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets installSysPackages
    *  **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @return bool|null
    */
    public function getInstallSysPackages()
    {
        return $this->container['installSysPackages'];
    }

    /**
    * Sets installSysPackages
    *
    * @param bool|null $installSysPackages **参数解释**：是否需要安装训练平台指定的 moxing 版本。 **取值范围**： - true：需要 - false：不需要
    *
    * @return $this
    */
    public function setInstallSysPackages($installSysPackages)
    {
        $this->container['installSysPackages'] = $installSysPackages;
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

