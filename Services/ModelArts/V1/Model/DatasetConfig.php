<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatasetConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatasetConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasetName  训练数据集名称，取自数据集列表接口响应体name。
    * datasetSource  所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    * datasetId  训练数据集id，取自数据集列表接口响应体dataset_id。
    * splitRatio  训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    * usedStep  数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    * datasetProportion  数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasetName' => 'string',
            'datasetSource' => 'string',
            'datasetId' => 'string',
            'splitRatio' => 'int',
            'usedStep' => 'string',
            'datasetProportion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasetName  训练数据集名称，取自数据集列表接口响应体name。
    * datasetSource  所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    * datasetId  训练数据集id，取自数据集列表接口响应体dataset_id。
    * splitRatio  训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    * usedStep  数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    * datasetProportion  数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasetName' => null,
        'datasetSource' => null,
        'datasetId' => null,
        'splitRatio' => 'int32',
        'usedStep' => null,
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
    * datasetName  训练数据集名称，取自数据集列表接口响应体name。
    * datasetSource  所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    * datasetId  训练数据集id，取自数据集列表接口响应体dataset_id。
    * splitRatio  训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    * usedStep  数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    * datasetProportion  数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasetName' => 'dataset_name',
            'datasetSource' => 'dataset_source',
            'datasetId' => 'dataset_id',
            'splitRatio' => 'split_ratio',
            'usedStep' => 'used_step',
            'datasetProportion' => 'dataset_proportion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasetName  训练数据集名称，取自数据集列表接口响应体name。
    * datasetSource  所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    * datasetId  训练数据集id，取自数据集列表接口响应体dataset_id。
    * splitRatio  训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    * usedStep  数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    * datasetProportion  数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $setters = [
            'datasetName' => 'setDatasetName',
            'datasetSource' => 'setDatasetSource',
            'datasetId' => 'setDatasetId',
            'splitRatio' => 'setSplitRatio',
            'usedStep' => 'setUsedStep',
            'datasetProportion' => 'setDatasetProportion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasetName  训练数据集名称，取自数据集列表接口响应体name。
    * datasetSource  所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    * datasetId  训练数据集id，取自数据集列表接口响应体dataset_id。
    * splitRatio  训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    * usedStep  数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    * datasetProportion  数据集配比比率，表示使用多少比率的该数据集进行训练。
    *
    * @var string[]
    */
    protected static $getters = [
            'datasetName' => 'getDatasetName',
            'datasetSource' => 'getDatasetSource',
            'datasetId' => 'getDatasetId',
            'splitRatio' => 'getSplitRatio',
            'usedStep' => 'getUsedStep',
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
        $this->container['datasetName'] = isset($data['datasetName']) ? $data['datasetName'] : null;
        $this->container['datasetSource'] = isset($data['datasetSource']) ? $data['datasetSource'] : null;
        $this->container['datasetId'] = isset($data['datasetId']) ? $data['datasetId'] : null;
        $this->container['splitRatio'] = isset($data['splitRatio']) ? $data['splitRatio'] : null;
        $this->container['usedStep'] = isset($data['usedStep']) ? $data['usedStep'] : null;
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
            if (!is_null($this->container['datasetName']) && (mb_strlen($this->container['datasetName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'datasetName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['datasetName']) && (mb_strlen($this->container['datasetName']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasetName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasetSource']) && (mb_strlen($this->container['datasetSource']) > 32)) {
                $invalidProperties[] = "invalid value for 'datasetSource', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['datasetSource']) && (mb_strlen($this->container['datasetSource']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasetSource', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasetId']) && (mb_strlen($this->container['datasetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'datasetId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['datasetId']) && (mb_strlen($this->container['datasetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'datasetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasetId']) && !preg_match("/^[a-zA-Z0-9]{19}$/", $this->container['datasetId'])) {
                $invalidProperties[] = "invalid value for 'datasetId', must be conform to the pattern /^[a-zA-Z0-9]{19}$/.";
            }
            if (!is_null($this->container['splitRatio']) && ($this->container['splitRatio'] > 50)) {
                $invalidProperties[] = "invalid value for 'splitRatio', must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['splitRatio']) && ($this->container['splitRatio'] < 1)) {
                $invalidProperties[] = "invalid value for 'splitRatio', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['usedStep']) && (mb_strlen($this->container['usedStep']) > 32)) {
                $invalidProperties[] = "invalid value for 'usedStep', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['usedStep']) && (mb_strlen($this->container['usedStep']) < 0)) {
                $invalidProperties[] = "invalid value for 'usedStep', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['datasetProportion']) && ($this->container['datasetProportion'] > 100)) {
                $invalidProperties[] = "invalid value for 'datasetProportion', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['datasetProportion']) && ($this->container['datasetProportion'] < 0)) {
                $invalidProperties[] = "invalid value for 'datasetProportion', must be bigger than or equal to 0.";
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
    * Gets datasetName
    *  训练数据集名称，取自数据集列表接口响应体name。
    *
    * @return string|null
    */
    public function getDatasetName()
    {
        return $this->container['datasetName'];
    }

    /**
    * Sets datasetName
    *
    * @param string|null $datasetName 训练数据集名称，取自数据集列表接口响应体name。
    *
    * @return $this
    */
    public function setDatasetName($datasetName)
    {
        $this->container['datasetName'] = $datasetName;
        return $this;
    }

    /**
    * Gets datasetSource
    *  所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    *
    * @return string|null
    */
    public function getDatasetSource()
    {
        return $this->container['datasetSource'];
    }

    /**
    * Sets datasetSource
    *
    * @param string|null $datasetSource 所使用的数据集来源，取值datamng|OBS|DB,分别表示来自于数据工程|OBS|数据库
    *
    * @return $this
    */
    public function setDatasetSource($datasetSource)
    {
        $this->container['datasetSource'] = $datasetSource;
        return $this;
    }

    /**
    * Gets datasetId
    *  训练数据集id，取自数据集列表接口响应体dataset_id。
    *
    * @return string|null
    */
    public function getDatasetId()
    {
        return $this->container['datasetId'];
    }

    /**
    * Sets datasetId
    *
    * @param string|null $datasetId 训练数据集id，取自数据集列表接口响应体dataset_id。
    *
    * @return $this
    */
    public function setDatasetId($datasetId)
    {
        $this->container['datasetId'] = $datasetId;
        return $this;
    }

    /**
    * Gets splitRatio
    *  训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    *
    * @return int|null
    */
    public function getSplitRatio()
    {
        return $this->container['splitRatio'];
    }

    /**
    * Sets splitRatio
    *
    * @param int|null $splitRatio 训练、验证数据集分割比率，当该模型支持验证集且验证集来自选择的训练集时使用，取值大于等于1，小于等于50。
    *
    * @return $this
    */
    public function setSplitRatio($splitRatio)
    {
        $this->container['splitRatio'] = $splitRatio;
        return $this;
    }

    /**
    * Gets usedStep
    *  数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    *
    * @return string|null
    */
    public function getUsedStep()
    {
        return $this->container['usedStep'];
    }

    /**
    * Sets usedStep
    *
    * @param string|null $usedStep 数据集使用的阶段，取值为train|eval|test，分别表示该数据集用于训练|验证|测试。
    *
    * @return $this
    */
    public function setUsedStep($usedStep)
    {
        $this->container['usedStep'] = $usedStep;
        return $this;
    }

    /**
    * Gets datasetProportion
    *  数据集配比比率，表示使用多少比率的该数据集进行训练。
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
    * @param int|null $datasetProportion 数据集配比比率，表示使用多少比率的该数据集进行训练。
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

