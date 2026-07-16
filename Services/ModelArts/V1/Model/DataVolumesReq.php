<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataVolumesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataVolumesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    * uri  **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    * efsId  **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'mountPath' => 'string',
            'uri' => 'string',
            'efsId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    * uri  **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    * efsId  **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'mountPath' => null,
        'uri' => null,
        'efsId' => null
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
    * category  **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    * uri  **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    * efsId  **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'mountPath' => 'mount_path',
            'uri' => 'uri',
            'efsId' => 'efs_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    * uri  **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    * efsId  **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'mountPath' => 'setMountPath',
            'uri' => 'setUri',
            'efsId' => 'setEfsId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    * mountPath  **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    * uri  **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    * efsId  **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'mountPath' => 'getMountPath',
            'uri' => 'getUri',
            'efsId' => 'getEfsId'
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
    const CATEGORY_OBS = 'OBS';
    const CATEGORY_OBSFS = 'OBSFS';
    const CATEGORY_EFS = 'EFS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_OBS,
            self::CATEGORY_OBSFS,
            self::CATEGORY_EFS,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['efsId'] = isset($data['efsId']) ? $data['efsId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
            $allowedValues = $this->getCategoryAllowableValues();
                if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['mountPath'] === null) {
            $invalidProperties[] = "'mountPath' can't be null";
        }
        if ($this->container['uri'] === null) {
            $invalidProperties[] = "'uri' can't be null";
        }
            if (!is_null($this->container['efsId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/", $this->container['efsId'])) {
                $invalidProperties[] = "invalid value for 'efsId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/.";
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
    * Gets category
    *  **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释**：动态挂载存储类型。 **约束限制**：不涉及。 **取值范围**：枚举类型，取值如下： - OBS：对象存储服务 - OBSFS：并行文件系统PFS - EFS：高性能弹性文件服务SFS Turbo  **默认取值**：无。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    *
    * @return string
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string $mountPath **参数解释**：在Notebook实例中挂载的路径。 **约束限制**：必须是/data目录的子目录。 **取值范围**：限制长度为256个字符，必须在Notebook的/data/的子目录下。 **默认取值**：无。
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
        return $this;
    }

    /**
    * Gets uri
    *  **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string $uri **参数解释**：存储路径，示例：obs://modelarts/notebook/ 或 da669f6e-5591-4c10-b2a7-18d053a75677.sfsturbo.internal:/notebook。 **约束限制**：并行文件系统PFS 或 高性能弹性文件服务SFS Turbo中合法的挂载路径。 **取值范围**：限制长度为256个字符。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets efsId
    *  **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @return string|null
    */
    public function getEfsId()
    {
        return $this->container['efsId'];
    }

    /**
    * Sets efsId
    *
    * @param string|null $efsId **参数解释**：高性能弹性文件服务SFS Turbo实例id。 **约束限制**：若category字段为EFS，则此字段必填。 **取值范围**：合法UUID类型。 **默认取值**：无
    *
    * @return $this
    */
    public function setEfsId($efsId)
    {
        $this->container['efsId'] = $efsId;
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

