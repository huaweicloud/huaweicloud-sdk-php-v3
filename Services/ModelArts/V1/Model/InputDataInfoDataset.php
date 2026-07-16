<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InputDataInfoDataset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InputDataInfo_dataset';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  训练作业的数据集ID。
    * versionId  训练作业的数据集版本ID。
    * obsUrl  训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    * serviceType  **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    * name  **参数解释**：训练作业的数据集名称。
    * datasetProportion  **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'versionId' => 'string',
            'obsUrl' => 'string',
            'serviceType' => 'string',
            'name' => 'string',
            'datasetProportion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  训练作业的数据集ID。
    * versionId  训练作业的数据集版本ID。
    * obsUrl  训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    * serviceType  **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    * name  **参数解释**：训练作业的数据集名称。
    * datasetProportion  **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'versionId' => null,
        'obsUrl' => null,
        'serviceType' => null,
        'name' => null,
        'datasetProportion' => 'int32'
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
    * id  训练作业的数据集ID。
    * versionId  训练作业的数据集版本ID。
    * obsUrl  训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    * serviceType  **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    * name  **参数解释**：训练作业的数据集名称。
    * datasetProportion  **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'versionId' => 'version_id',
            'obsUrl' => 'obs_url',
            'serviceType' => 'service_type',
            'name' => 'name',
            'datasetProportion' => 'dataset_proportion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  训练作业的数据集ID。
    * versionId  训练作业的数据集版本ID。
    * obsUrl  训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    * serviceType  **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    * name  **参数解释**：训练作业的数据集名称。
    * datasetProportion  **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'versionId' => 'setVersionId',
            'obsUrl' => 'setObsUrl',
            'serviceType' => 'setServiceType',
            'name' => 'setName',
            'datasetProportion' => 'setDatasetProportion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  训练作业的数据集ID。
    * versionId  训练作业的数据集版本ID。
    * obsUrl  训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    * serviceType  **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    * name  **参数解释**：训练作业的数据集名称。
    * datasetProportion  **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'versionId' => 'getVersionId',
            'obsUrl' => 'getObsUrl',
            'serviceType' => 'getServiceType',
            'name' => 'getName',
            'datasetProportion' => 'getDatasetProportion'
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
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['obsUrl'] = isset($data['obsUrl']) ? $data['obsUrl'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['datasetProportion'] = isset($data['datasetProportion']) ? $data['datasetProportion'] : null;
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
            if (!is_null($this->container['datasetProportion']) && ($this->container['datasetProportion'] > 100)) {
                $invalidProperties[] = "invalid value for 'datasetProportion', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['datasetProportion']) && ($this->container['datasetProportion'] < 1)) {
                $invalidProperties[] = "invalid value for 'datasetProportion', must be bigger than or equal to 1.";
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
    *  训练作业的数据集ID。
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
    * @param string $id 训练作业的数据集ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets versionId
    *  训练作业的数据集版本ID。
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 训练作业的数据集版本ID。
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets obsUrl
    *  训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    *
    * @return string|null
    */
    public function getObsUrl()
    {
        return $this->container['obsUrl'];
    }

    /**
    * Sets obsUrl
    *
    * @param string|null $obsUrl 训练作业需要的数据集OBS路径URL，ModelArts会通过数据集ID和数据集版本ID自动解析生成。如：“/usr/data/”。
    *
    * @return $this
    */
    public function setObsUrl($obsUrl)
    {
        $this->container['obsUrl'] = $obsUrl;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释**：数据集服务类型。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：取值为V3时表示使用的是资产服务提供的数据集，其他表示旧版数据集。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：训练作业的数据集名称。
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
    * @param string|null $name **参数解释**：训练作业的数据集名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets datasetProportion
    *  **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @return int|null
    */
    public function getDatasetProportion()
    {
        return $this->container['datasetProportion'];
    }

    /**
    * Sets datasetProportion
    *
    * @param int|null $datasetProportion **参数解释**：精调训练作业的数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @return $this
    */
    public function setDatasetProportion($datasetProportion)
    {
        $this->container['datasetProportion'] = $datasetProportion;
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

