<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublishVersionVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublishVersionVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  版本ID。
    * versionName  版本名称。
    * versionTag  版本标记。
    * description  版本描述。
    * bizId  业务对象ID。
    * bizType  bizType
    * bizInfo  业务详情。
    * bizInfoVo  业务对象。
    * effectObjs  影响信息。
    * changeProps  变化信息。
    * sqlDdl  SQL脚本。
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * isCurrentVersion  是否为当前版本。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'versionName' => 'string',
            'versionTag' => 'string',
            'description' => 'string',
            'bizId' => 'string',
            'bizType' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum',
            'bizInfo' => 'string',
            'bizInfoVo' => 'object',
            'effectObjs' => 'string',
            'changeProps' => 'string',
            'sqlDdl' => 'string',
            'physicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'technicalAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'businessAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'metaDataLink' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dataQuality' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'dlfTask' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'materialization' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'publishToDlm' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'bizMetric' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'summaryStatus' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum',
            'isCurrentVersion' => 'bool',
            'createTime' => '\DateTime',
            'createBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  版本ID。
    * versionName  版本名称。
    * versionTag  版本标记。
    * description  版本描述。
    * bizId  业务对象ID。
    * bizType  bizType
    * bizInfo  业务详情。
    * bizInfoVo  业务对象。
    * effectObjs  影响信息。
    * changeProps  变化信息。
    * sqlDdl  SQL脚本。
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * isCurrentVersion  是否为当前版本。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'versionName' => null,
        'versionTag' => null,
        'description' => null,
        'bizId' => 'int64',
        'bizType' => null,
        'bizInfo' => null,
        'bizInfoVo' => null,
        'effectObjs' => null,
        'changeProps' => null,
        'sqlDdl' => null,
        'physicalTable' => null,
        'technicalAsset' => null,
        'businessAsset' => null,
        'metaDataLink' => null,
        'dataQuality' => null,
        'dlfTask' => null,
        'materialization' => null,
        'publishToDlm' => null,
        'bizMetric' => null,
        'summaryStatus' => null,
        'isCurrentVersion' => null,
        'createTime' => 'date-time',
        'createBy' => null
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
    * id  版本ID。
    * versionName  版本名称。
    * versionTag  版本标记。
    * description  版本描述。
    * bizId  业务对象ID。
    * bizType  bizType
    * bizInfo  业务详情。
    * bizInfoVo  业务对象。
    * effectObjs  影响信息。
    * changeProps  变化信息。
    * sqlDdl  SQL脚本。
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * isCurrentVersion  是否为当前版本。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'versionName' => 'version_name',
            'versionTag' => 'version_tag',
            'description' => 'description',
            'bizId' => 'biz_id',
            'bizType' => 'biz_type',
            'bizInfo' => 'biz_info',
            'bizInfoVo' => 'biz_info_vo',
            'effectObjs' => 'effect_objs',
            'changeProps' => 'change_props',
            'sqlDdl' => 'sql_ddl',
            'physicalTable' => 'physical_table',
            'technicalAsset' => 'technical_asset',
            'businessAsset' => 'business_asset',
            'metaDataLink' => 'meta_data_link',
            'dataQuality' => 'data_quality',
            'dlfTask' => 'dlf_task',
            'materialization' => 'materialization',
            'publishToDlm' => 'publish_to_dlm',
            'bizMetric' => 'biz_metric',
            'summaryStatus' => 'summary_status',
            'isCurrentVersion' => 'is_current_version',
            'createTime' => 'create_time',
            'createBy' => 'create_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  版本ID。
    * versionName  版本名称。
    * versionTag  版本标记。
    * description  版本描述。
    * bizId  业务对象ID。
    * bizType  bizType
    * bizInfo  业务详情。
    * bizInfoVo  业务对象。
    * effectObjs  影响信息。
    * changeProps  变化信息。
    * sqlDdl  SQL脚本。
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * isCurrentVersion  是否为当前版本。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'versionName' => 'setVersionName',
            'versionTag' => 'setVersionTag',
            'description' => 'setDescription',
            'bizId' => 'setBizId',
            'bizType' => 'setBizType',
            'bizInfo' => 'setBizInfo',
            'bizInfoVo' => 'setBizInfoVo',
            'effectObjs' => 'setEffectObjs',
            'changeProps' => 'setChangeProps',
            'sqlDdl' => 'setSqlDdl',
            'physicalTable' => 'setPhysicalTable',
            'technicalAsset' => 'setTechnicalAsset',
            'businessAsset' => 'setBusinessAsset',
            'metaDataLink' => 'setMetaDataLink',
            'dataQuality' => 'setDataQuality',
            'dlfTask' => 'setDlfTask',
            'materialization' => 'setMaterialization',
            'publishToDlm' => 'setPublishToDlm',
            'bizMetric' => 'setBizMetric',
            'summaryStatus' => 'setSummaryStatus',
            'isCurrentVersion' => 'setIsCurrentVersion',
            'createTime' => 'setCreateTime',
            'createBy' => 'setCreateBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  版本ID。
    * versionName  版本名称。
    * versionTag  版本标记。
    * description  版本描述。
    * bizId  业务对象ID。
    * bizType  bizType
    * bizInfo  业务详情。
    * bizInfoVo  业务对象。
    * effectObjs  影响信息。
    * changeProps  变化信息。
    * sqlDdl  SQL脚本。
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    * dlfTask  dlfTask
    * materialization  materialization
    * publishToDlm  publishToDlm
    * bizMetric  bizMetric
    * summaryStatus  summaryStatus
    * isCurrentVersion  是否为当前版本。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'versionName' => 'getVersionName',
            'versionTag' => 'getVersionTag',
            'description' => 'getDescription',
            'bizId' => 'getBizId',
            'bizType' => 'getBizType',
            'bizInfo' => 'getBizInfo',
            'bizInfoVo' => 'getBizInfoVo',
            'effectObjs' => 'getEffectObjs',
            'changeProps' => 'getChangeProps',
            'sqlDdl' => 'getSqlDdl',
            'physicalTable' => 'getPhysicalTable',
            'technicalAsset' => 'getTechnicalAsset',
            'businessAsset' => 'getBusinessAsset',
            'metaDataLink' => 'getMetaDataLink',
            'dataQuality' => 'getDataQuality',
            'dlfTask' => 'getDlfTask',
            'materialization' => 'getMaterialization',
            'publishToDlm' => 'getPublishToDlm',
            'bizMetric' => 'getBizMetric',
            'summaryStatus' => 'getSummaryStatus',
            'isCurrentVersion' => 'getIsCurrentVersion',
            'createTime' => 'getCreateTime',
            'createBy' => 'getCreateBy'
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
        $this->container['versionName'] = isset($data['versionName']) ? $data['versionName'] : null;
        $this->container['versionTag'] = isset($data['versionTag']) ? $data['versionTag'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['bizInfo'] = isset($data['bizInfo']) ? $data['bizInfo'] : null;
        $this->container['bizInfoVo'] = isset($data['bizInfoVo']) ? $data['bizInfoVo'] : null;
        $this->container['effectObjs'] = isset($data['effectObjs']) ? $data['effectObjs'] : null;
        $this->container['changeProps'] = isset($data['changeProps']) ? $data['changeProps'] : null;
        $this->container['sqlDdl'] = isset($data['sqlDdl']) ? $data['sqlDdl'] : null;
        $this->container['physicalTable'] = isset($data['physicalTable']) ? $data['physicalTable'] : null;
        $this->container['technicalAsset'] = isset($data['technicalAsset']) ? $data['technicalAsset'] : null;
        $this->container['businessAsset'] = isset($data['businessAsset']) ? $data['businessAsset'] : null;
        $this->container['metaDataLink'] = isset($data['metaDataLink']) ? $data['metaDataLink'] : null;
        $this->container['dataQuality'] = isset($data['dataQuality']) ? $data['dataQuality'] : null;
        $this->container['dlfTask'] = isset($data['dlfTask']) ? $data['dlfTask'] : null;
        $this->container['materialization'] = isset($data['materialization']) ? $data['materialization'] : null;
        $this->container['publishToDlm'] = isset($data['publishToDlm']) ? $data['publishToDlm'] : null;
        $this->container['bizMetric'] = isset($data['bizMetric']) ? $data['bizMetric'] : null;
        $this->container['summaryStatus'] = isset($data['summaryStatus']) ? $data['summaryStatus'] : null;
        $this->container['isCurrentVersion'] = isset($data['isCurrentVersion']) ? $data['isCurrentVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['versionName'] === null) {
            $invalidProperties[] = "'versionName' can't be null";
        }
            if (!preg_match("/^[^\\\\<>]*$/", $this->container['versionName'])) {
                $invalidProperties[] = "invalid value for 'versionName', must be conform to the pattern /^[^\\\\<>]*$/.";
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
    *  版本ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 版本ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets versionName
    *  版本名称。
    *
    * @return string
    */
    public function getVersionName()
    {
        return $this->container['versionName'];
    }

    /**
    * Sets versionName
    *
    * @param string $versionName 版本名称。
    *
    * @return $this
    */
    public function setVersionName($versionName)
    {
        $this->container['versionName'] = $versionName;
        return $this;
    }

    /**
    * Gets versionTag
    *  版本标记。
    *
    * @return string|null
    */
    public function getVersionTag()
    {
        return $this->container['versionTag'];
    }

    /**
    * Sets versionTag
    *
    * @param string|null $versionTag 版本标记。
    *
    * @return $this
    */
    public function setVersionTag($versionTag)
    {
        $this->container['versionTag'] = $versionTag;
        return $this;
    }

    /**
    * Gets description
    *  版本描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 版本描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bizId
    *  业务对象ID。
    *
    * @return string|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string|null $bizId 业务对象ID。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets bizType
    *  bizType
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizTypeEnum|null $bizType bizType
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets bizInfo
    *  业务详情。
    *
    * @return string|null
    */
    public function getBizInfo()
    {
        return $this->container['bizInfo'];
    }

    /**
    * Sets bizInfo
    *
    * @param string|null $bizInfo 业务详情。
    *
    * @return $this
    */
    public function setBizInfo($bizInfo)
    {
        $this->container['bizInfo'] = $bizInfo;
        return $this;
    }

    /**
    * Gets bizInfoVo
    *  业务对象。
    *
    * @return object|null
    */
    public function getBizInfoVo()
    {
        return $this->container['bizInfoVo'];
    }

    /**
    * Sets bizInfoVo
    *
    * @param object|null $bizInfoVo 业务对象。
    *
    * @return $this
    */
    public function setBizInfoVo($bizInfoVo)
    {
        $this->container['bizInfoVo'] = $bizInfoVo;
        return $this;
    }

    /**
    * Gets effectObjs
    *  影响信息。
    *
    * @return string|null
    */
    public function getEffectObjs()
    {
        return $this->container['effectObjs'];
    }

    /**
    * Sets effectObjs
    *
    * @param string|null $effectObjs 影响信息。
    *
    * @return $this
    */
    public function setEffectObjs($effectObjs)
    {
        $this->container['effectObjs'] = $effectObjs;
        return $this;
    }

    /**
    * Gets changeProps
    *  变化信息。
    *
    * @return string|null
    */
    public function getChangeProps()
    {
        return $this->container['changeProps'];
    }

    /**
    * Sets changeProps
    *
    * @param string|null $changeProps 变化信息。
    *
    * @return $this
    */
    public function setChangeProps($changeProps)
    {
        $this->container['changeProps'] = $changeProps;
        return $this;
    }

    /**
    * Gets sqlDdl
    *  SQL脚本。
    *
    * @return string|null
    */
    public function getSqlDdl()
    {
        return $this->container['sqlDdl'];
    }

    /**
    * Sets sqlDdl
    *
    * @param string|null $sqlDdl SQL脚本。
    *
    * @return $this
    */
    public function setSqlDdl($sqlDdl)
    {
        $this->container['sqlDdl'] = $sqlDdl;
        return $this;
    }

    /**
    * Gets physicalTable
    *  physicalTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getPhysicalTable()
    {
        return $this->container['physicalTable'];
    }

    /**
    * Sets physicalTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $physicalTable physicalTable
    *
    * @return $this
    */
    public function setPhysicalTable($physicalTable)
    {
        $this->container['physicalTable'] = $physicalTable;
        return $this;
    }

    /**
    * Gets technicalAsset
    *  technicalAsset
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getTechnicalAsset()
    {
        return $this->container['technicalAsset'];
    }

    /**
    * Sets technicalAsset
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $technicalAsset technicalAsset
    *
    * @return $this
    */
    public function setTechnicalAsset($technicalAsset)
    {
        $this->container['technicalAsset'] = $technicalAsset;
        return $this;
    }

    /**
    * Gets businessAsset
    *  businessAsset
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getBusinessAsset()
    {
        return $this->container['businessAsset'];
    }

    /**
    * Sets businessAsset
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $businessAsset businessAsset
    *
    * @return $this
    */
    public function setBusinessAsset($businessAsset)
    {
        $this->container['businessAsset'] = $businessAsset;
        return $this;
    }

    /**
    * Gets metaDataLink
    *  metaDataLink
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getMetaDataLink()
    {
        return $this->container['metaDataLink'];
    }

    /**
    * Sets metaDataLink
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $metaDataLink metaDataLink
    *
    * @return $this
    */
    public function setMetaDataLink($metaDataLink)
    {
        $this->container['metaDataLink'] = $metaDataLink;
        return $this;
    }

    /**
    * Gets dataQuality
    *  dataQuality
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getDataQuality()
    {
        return $this->container['dataQuality'];
    }

    /**
    * Sets dataQuality
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $dataQuality dataQuality
    *
    * @return $this
    */
    public function setDataQuality($dataQuality)
    {
        $this->container['dataQuality'] = $dataQuality;
        return $this;
    }

    /**
    * Gets dlfTask
    *  dlfTask
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getDlfTask()
    {
        return $this->container['dlfTask'];
    }

    /**
    * Sets dlfTask
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $dlfTask dlfTask
    *
    * @return $this
    */
    public function setDlfTask($dlfTask)
    {
        $this->container['dlfTask'] = $dlfTask;
        return $this;
    }

    /**
    * Gets materialization
    *  materialization
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getMaterialization()
    {
        return $this->container['materialization'];
    }

    /**
    * Sets materialization
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $materialization materialization
    *
    * @return $this
    */
    public function setMaterialization($materialization)
    {
        $this->container['materialization'] = $materialization;
        return $this;
    }

    /**
    * Gets publishToDlm
    *  publishToDlm
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getPublishToDlm()
    {
        return $this->container['publishToDlm'];
    }

    /**
    * Sets publishToDlm
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $publishToDlm publishToDlm
    *
    * @return $this
    */
    public function setPublishToDlm($publishToDlm)
    {
        $this->container['publishToDlm'] = $publishToDlm;
        return $this;
    }

    /**
    * Gets bizMetric
    *  bizMetric
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getBizMetric()
    {
        return $this->container['bizMetric'];
    }

    /**
    * Sets bizMetric
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $bizMetric bizMetric
    *
    * @return $this
    */
    public function setBizMetric($bizMetric)
    {
        $this->container['bizMetric'] = $bizMetric;
        return $this;
    }

    /**
    * Gets summaryStatus
    *  summaryStatus
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null
    */
    public function getSummaryStatus()
    {
        return $this->container['summaryStatus'];
    }

    /**
    * Sets summaryStatus
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusEnum|null $summaryStatus summaryStatus
    *
    * @return $this
    */
    public function setSummaryStatus($summaryStatus)
    {
        $this->container['summaryStatus'] = $summaryStatus;
        return $this;
    }

    /**
    * Gets isCurrentVersion
    *  是否为当前版本。
    *
    * @return bool|null
    */
    public function getIsCurrentVersion()
    {
        return $this->container['isCurrentVersion'];
    }

    /**
    * Sets isCurrentVersion
    *
    * @param bool|null $isCurrentVersion 是否为当前版本。
    *
    * @return $this
    */
    public function setIsCurrentVersion($isCurrentVersion)
    {
        $this->container['isCurrentVersion'] = $isCurrentVersion;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
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

