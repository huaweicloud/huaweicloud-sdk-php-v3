<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LeagueDatasetStatisticsVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LeagueDatasetStatisticsVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasetDomainAlias  参与方别名
    * datasetDomainName  参与方租户名称
    * datasetId  数据集id
    * datasetInterceptCnt  数据集拦截次数
    * datasetName  数据集名称
    * datasetUseCnt  数据集使用次数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasetDomainAlias' => 'string',
            'datasetDomainName' => 'string',
            'datasetId' => 'string',
            'datasetInterceptCnt' => 'int',
            'datasetName' => 'string',
            'datasetUseCnt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasetDomainAlias  参与方别名
    * datasetDomainName  参与方租户名称
    * datasetId  数据集id
    * datasetInterceptCnt  数据集拦截次数
    * datasetName  数据集名称
    * datasetUseCnt  数据集使用次数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasetDomainAlias' => null,
        'datasetDomainName' => null,
        'datasetId' => null,
        'datasetInterceptCnt' => 'int64',
        'datasetName' => null,
        'datasetUseCnt' => 'int64'
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
    * datasetDomainAlias  参与方别名
    * datasetDomainName  参与方租户名称
    * datasetId  数据集id
    * datasetInterceptCnt  数据集拦截次数
    * datasetName  数据集名称
    * datasetUseCnt  数据集使用次数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasetDomainAlias' => 'dataset_domain_alias',
            'datasetDomainName' => 'dataset_domain_name',
            'datasetId' => 'dataset_id',
            'datasetInterceptCnt' => 'dataset_intercept_cnt',
            'datasetName' => 'dataset_name',
            'datasetUseCnt' => 'dataset_use_cnt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasetDomainAlias  参与方别名
    * datasetDomainName  参与方租户名称
    * datasetId  数据集id
    * datasetInterceptCnt  数据集拦截次数
    * datasetName  数据集名称
    * datasetUseCnt  数据集使用次数
    *
    * @var string[]
    */
    protected static $setters = [
            'datasetDomainAlias' => 'setDatasetDomainAlias',
            'datasetDomainName' => 'setDatasetDomainName',
            'datasetId' => 'setDatasetId',
            'datasetInterceptCnt' => 'setDatasetInterceptCnt',
            'datasetName' => 'setDatasetName',
            'datasetUseCnt' => 'setDatasetUseCnt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasetDomainAlias  参与方别名
    * datasetDomainName  参与方租户名称
    * datasetId  数据集id
    * datasetInterceptCnt  数据集拦截次数
    * datasetName  数据集名称
    * datasetUseCnt  数据集使用次数
    *
    * @var string[]
    */
    protected static $getters = [
            'datasetDomainAlias' => 'getDatasetDomainAlias',
            'datasetDomainName' => 'getDatasetDomainName',
            'datasetId' => 'getDatasetId',
            'datasetInterceptCnt' => 'getDatasetInterceptCnt',
            'datasetName' => 'getDatasetName',
            'datasetUseCnt' => 'getDatasetUseCnt'
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
        $this->container['datasetDomainAlias'] = isset($data['datasetDomainAlias']) ? $data['datasetDomainAlias'] : null;
        $this->container['datasetDomainName'] = isset($data['datasetDomainName']) ? $data['datasetDomainName'] : null;
        $this->container['datasetId'] = isset($data['datasetId']) ? $data['datasetId'] : null;
        $this->container['datasetInterceptCnt'] = isset($data['datasetInterceptCnt']) ? $data['datasetInterceptCnt'] : null;
        $this->container['datasetName'] = isset($data['datasetName']) ? $data['datasetName'] : null;
        $this->container['datasetUseCnt'] = isset($data['datasetUseCnt']) ? $data['datasetUseCnt'] : null;
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
    * Gets datasetDomainAlias
    *  参与方别名
    *
    * @return string|null
    */
    public function getDatasetDomainAlias()
    {
        return $this->container['datasetDomainAlias'];
    }

    /**
    * Sets datasetDomainAlias
    *
    * @param string|null $datasetDomainAlias 参与方别名
    *
    * @return $this
    */
    public function setDatasetDomainAlias($datasetDomainAlias)
    {
        $this->container['datasetDomainAlias'] = $datasetDomainAlias;
        return $this;
    }

    /**
    * Gets datasetDomainName
    *  参与方租户名称
    *
    * @return string|null
    */
    public function getDatasetDomainName()
    {
        return $this->container['datasetDomainName'];
    }

    /**
    * Sets datasetDomainName
    *
    * @param string|null $datasetDomainName 参与方租户名称
    *
    * @return $this
    */
    public function setDatasetDomainName($datasetDomainName)
    {
        $this->container['datasetDomainName'] = $datasetDomainName;
        return $this;
    }

    /**
    * Gets datasetId
    *  数据集id
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
    * @param string|null $datasetId 数据集id
    *
    * @return $this
    */
    public function setDatasetId($datasetId)
    {
        $this->container['datasetId'] = $datasetId;
        return $this;
    }

    /**
    * Gets datasetInterceptCnt
    *  数据集拦截次数
    *
    * @return int|null
    */
    public function getDatasetInterceptCnt()
    {
        return $this->container['datasetInterceptCnt'];
    }

    /**
    * Sets datasetInterceptCnt
    *
    * @param int|null $datasetInterceptCnt 数据集拦截次数
    *
    * @return $this
    */
    public function setDatasetInterceptCnt($datasetInterceptCnt)
    {
        $this->container['datasetInterceptCnt'] = $datasetInterceptCnt;
        return $this;
    }

    /**
    * Gets datasetName
    *  数据集名称
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
    * @param string|null $datasetName 数据集名称
    *
    * @return $this
    */
    public function setDatasetName($datasetName)
    {
        $this->container['datasetName'] = $datasetName;
        return $this;
    }

    /**
    * Gets datasetUseCnt
    *  数据集使用次数
    *
    * @return int|null
    */
    public function getDatasetUseCnt()
    {
        return $this->container['datasetUseCnt'];
    }

    /**
    * Sets datasetUseCnt
    *
    * @param int|null $datasetUseCnt 数据集使用次数
    *
    * @return $this
    */
    public function setDatasetUseCnt($datasetUseCnt)
    {
        $this->container['datasetUseCnt'] = $datasetUseCnt;
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

