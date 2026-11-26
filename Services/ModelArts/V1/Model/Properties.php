<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Properties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Properties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasetNum  **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSize  **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * promptConfig  **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataCopyright  **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * manifestFilePath  **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arguments  **参数解释**：算子参数列表。 **约束限制**：不涉及。
    * updater  **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasetNum' => 'int',
            'datasetSize' => 'int',
            'promptConfig' => 'string',
            'dataCopyright' => 'string',
            'manifestFilePath' => 'string',
            'arguments' => '\HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgument[]',
            'updater' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasetNum  **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSize  **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * promptConfig  **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataCopyright  **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * manifestFilePath  **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arguments  **参数解释**：算子参数列表。 **约束限制**：不涉及。
    * updater  **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasetNum' => 'int32',
        'datasetSize' => 'int64',
        'promptConfig' => null,
        'dataCopyright' => null,
        'manifestFilePath' => null,
        'arguments' => null,
        'updater' => null
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
    * datasetNum  **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSize  **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * promptConfig  **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataCopyright  **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * manifestFilePath  **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arguments  **参数解释**：算子参数列表。 **约束限制**：不涉及。
    * updater  **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasetNum' => 'dataset_num',
            'datasetSize' => 'dataset_size',
            'promptConfig' => 'prompt_config',
            'dataCopyright' => 'data_copyright',
            'manifestFilePath' => 'manifest_file_path',
            'arguments' => 'arguments',
            'updater' => 'updater'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasetNum  **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSize  **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * promptConfig  **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataCopyright  **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * manifestFilePath  **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arguments  **参数解释**：算子参数列表。 **约束限制**：不涉及。
    * updater  **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'datasetNum' => 'setDatasetNum',
            'datasetSize' => 'setDatasetSize',
            'promptConfig' => 'setPromptConfig',
            'dataCopyright' => 'setDataCopyright',
            'manifestFilePath' => 'setManifestFilePath',
            'arguments' => 'setArguments',
            'updater' => 'setUpdater'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasetNum  **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * datasetSize  **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * promptConfig  **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * dataCopyright  **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * manifestFilePath  **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * arguments  **参数解释**：算子参数列表。 **约束限制**：不涉及。
    * updater  **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'datasetNum' => 'getDatasetNum',
            'datasetSize' => 'getDatasetSize',
            'promptConfig' => 'getPromptConfig',
            'dataCopyright' => 'getDataCopyright',
            'manifestFilePath' => 'getManifestFilePath',
            'arguments' => 'getArguments',
            'updater' => 'getUpdater'
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
        $this->container['datasetNum'] = isset($data['datasetNum']) ? $data['datasetNum'] : null;
        $this->container['datasetSize'] = isset($data['datasetSize']) ? $data['datasetSize'] : null;
        $this->container['promptConfig'] = isset($data['promptConfig']) ? $data['promptConfig'] : null;
        $this->container['dataCopyright'] = isset($data['dataCopyright']) ? $data['dataCopyright'] : null;
        $this->container['manifestFilePath'] = isset($data['manifestFilePath']) ? $data['manifestFilePath'] : null;
        $this->container['arguments'] = isset($data['arguments']) ? $data['arguments'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
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
    * Gets datasetNum
    *  **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getDatasetNum()
    {
        return $this->container['datasetNum'];
    }

    /**
    * Sets datasetNum
    *
    * @param int|null $datasetNum **参数解释**：数据集的条数。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetNum($datasetNum)
    {
        $this->container['datasetNum'] = $datasetNum;
        return $this;
    }

    /**
    * Gets datasetSize
    *  **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return int|null
    */
    public function getDatasetSize()
    {
        return $this->container['datasetSize'];
    }

    /**
    * Sets datasetSize
    *
    * @param int|null $datasetSize **参数解释**：数据集资产资源文件总大小。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDatasetSize($datasetSize)
    {
        $this->container['datasetSize'] = $datasetSize;
        return $this;
    }

    /**
    * Gets promptConfig
    *  **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getPromptConfig()
    {
        return $this->container['promptConfig'];
    }

    /**
    * Sets promptConfig
    *
    * @param string|null $promptConfig **参数解释**：数据集资产评测模版相对地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setPromptConfig($promptConfig)
    {
        $this->container['promptConfig'] = $promptConfig;
        return $this;
    }

    /**
    * Gets dataCopyright
    *  **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getDataCopyright()
    {
        return $this->container['dataCopyright'];
    }

    /**
    * Sets dataCopyright
    *
    * @param string|null $dataCopyright **参数解释**：数据集资产版权信息，包含数据集信息，License和地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setDataCopyright($dataCopyright)
    {
        $this->container['dataCopyright'] = $dataCopyright;
        return $this;
    }

    /**
    * Gets manifestFilePath
    *  **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getManifestFilePath()
    {
        return $this->container['manifestFilePath'];
    }

    /**
    * Sets manifestFilePath
    *
    * @param string|null $manifestFilePath **参数解释**：数据集资产索引文件地址。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setManifestFilePath($manifestFilePath)
    {
        $this->container['manifestFilePath'] = $manifestFilePath;
        return $this;
    }

    /**
    * Gets arguments
    *  **参数解释**：算子参数列表。 **约束限制**：不涉及。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgument[]|null
    */
    public function getArguments()
    {
        return $this->container['arguments'];
    }

    /**
    * Sets arguments
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\OperatorArgument[]|null $arguments **参数解释**：算子参数列表。 **约束限制**：不涉及。
    *
    * @return $this
    */
    public function setArguments($arguments)
    {
        $this->container['arguments'] = $arguments;
        return $this;
    }

    /**
    * Gets updater
    *  **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
    * Sets updater
    *
    * @param string|null $updater **参数解释**：数据集资产修改人信息。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;
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

