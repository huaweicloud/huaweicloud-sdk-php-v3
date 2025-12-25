<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allVendors  所有的云厂商、云产品和日志
    * cofingStatistics  cofingStatistics
    * dataList  数据
    * datasets  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsSets  lts日志配置
    * projectId  项目ID
    * regionId  所属region
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allVendors' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyAllVendors[]',
            'cofingStatistics' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyCofingStatistics',
            'dataList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyDataList[]',
            'datasets' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DatasetInfo[]',
            'dataspaceId' => 'string',
            'dataspaceName' => 'string',
            'domainId' => 'string',
            'ltsSets' => '\HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVo[]',
            'projectId' => 'string',
            'regionId' => 'string',
            'workspaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allVendors  所有的云厂商、云产品和日志
    * cofingStatistics  cofingStatistics
    * dataList  数据
    * datasets  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsSets  lts日志配置
    * projectId  项目ID
    * regionId  所属region
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allVendors' => null,
        'cofingStatistics' => null,
        'dataList' => null,
        'datasets' => null,
        'dataspaceId' => null,
        'dataspaceName' => null,
        'domainId' => null,
        'ltsSets' => null,
        'projectId' => null,
        'regionId' => null,
        'workspaceId' => null
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
    * allVendors  所有的云厂商、云产品和日志
    * cofingStatistics  cofingStatistics
    * dataList  数据
    * datasets  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsSets  lts日志配置
    * projectId  项目ID
    * regionId  所属region
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allVendors' => 'all_vendors',
            'cofingStatistics' => 'cofing_statistics',
            'dataList' => 'data_list',
            'datasets' => 'datasets',
            'dataspaceId' => 'dataspace_id',
            'dataspaceName' => 'dataspace_name',
            'domainId' => 'domain_id',
            'ltsSets' => 'lts_sets',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'workspaceId' => 'workspace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allVendors  所有的云厂商、云产品和日志
    * cofingStatistics  cofingStatistics
    * dataList  数据
    * datasets  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsSets  lts日志配置
    * projectId  项目ID
    * regionId  所属region
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $setters = [
            'allVendors' => 'setAllVendors',
            'cofingStatistics' => 'setCofingStatistics',
            'dataList' => 'setDataList',
            'datasets' => 'setDatasets',
            'dataspaceId' => 'setDataspaceId',
            'dataspaceName' => 'setDataspaceName',
            'domainId' => 'setDomainId',
            'ltsSets' => 'setLtsSets',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'workspaceId' => 'setWorkspaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allVendors  所有的云厂商、云产品和日志
    * cofingStatistics  cofingStatistics
    * dataList  数据
    * datasets  数据集列表
    * dataspaceId  数据空间ID
    * dataspaceName  数据空间名称
    * domainId  账号ID
    * ltsSets  lts日志配置
    * projectId  项目ID
    * regionId  所属region
    * workspaceId  工作空间 id
    *
    * @var string[]
    */
    protected static $getters = [
            'allVendors' => 'getAllVendors',
            'cofingStatistics' => 'getCofingStatistics',
            'dataList' => 'getDataList',
            'datasets' => 'getDatasets',
            'dataspaceId' => 'getDataspaceId',
            'dataspaceName' => 'getDataspaceName',
            'domainId' => 'getDomainId',
            'ltsSets' => 'getLtsSets',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'workspaceId' => 'getWorkspaceId'
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
        $this->container['allVendors'] = isset($data['allVendors']) ? $data['allVendors'] : null;
        $this->container['cofingStatistics'] = isset($data['cofingStatistics']) ? $data['cofingStatistics'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['datasets'] = isset($data['datasets']) ? $data['datasets'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['dataspaceName'] = isset($data['dataspaceName']) ? $data['dataspaceName'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ltsSets'] = isset($data['ltsSets']) ? $data['ltsSets'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) > 255)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['dataspaceName']) && (mb_strlen($this->container['dataspaceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dataspaceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 10)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
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
    * Gets allVendors
    *  所有的云厂商、云产品和日志
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyAllVendors[]|null
    */
    public function getAllVendors()
    {
        return $this->container['allVendors'];
    }

    /**
    * Sets allVendors
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyAllVendors[]|null $allVendors 所有的云厂商、云产品和日志
    *
    * @return $this
    */
    public function setAllVendors($allVendors)
    {
        $this->container['allVendors'] = $allVendors;
        return $this;
    }

    /**
    * Gets cofingStatistics
    *  cofingStatistics
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyCofingStatistics|null
    */
    public function getCofingStatistics()
    {
        return $this->container['cofingStatistics'];
    }

    /**
    * Sets cofingStatistics
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyCofingStatistics|null $cofingStatistics cofingStatistics
    *
    * @return $this
    */
    public function setCofingStatistics($cofingStatistics)
    {
        $this->container['cofingStatistics'] = $cofingStatistics;
        return $this;
    }

    /**
    * Gets dataList
    *  数据
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyDataList[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ListCollectConfigResponseBodyDataList[]|null $dataList 数据
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets datasets
    *  数据集列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DatasetInfo[]|null
    */
    public function getDatasets()
    {
        return $this->container['datasets'];
    }

    /**
    * Sets datasets
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DatasetInfo[]|null $datasets 数据集列表
    *
    * @return $this
    */
    public function setDatasets($datasets)
    {
        $this->container['datasets'] = $datasets;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets dataspaceName
    *  数据空间名称
    *
    * @return string|null
    */
    public function getDataspaceName()
    {
        return $this->container['dataspaceName'];
    }

    /**
    * Sets dataspaceName
    *
    * @param string|null $dataspaceName 数据空间名称
    *
    * @return $this
    */
    public function setDataspaceName($dataspaceName)
    {
        $this->container['dataspaceName'] = $dataspaceName;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ltsSets
    *  lts日志配置
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVo[]|null
    */
    public function getLtsSets()
    {
        return $this->container['ltsSets'];
    }

    /**
    * Sets ltsSets
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVo[]|null $ltsSets lts日志配置
    *
    * @return $this
    */
    public function setLtsSets($ltsSets)
    {
        $this->container['ltsSets'] = $ltsSets;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  所属region
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 所属region
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间 id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间 id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
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

