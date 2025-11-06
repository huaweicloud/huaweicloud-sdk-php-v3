<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDashBoardResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDashBoardResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * dashboardType  仪表盘类型。
    * dashboardTitle  仪表盘名称。
    * dashboardTitleEn  仪表盘英文名称。
    * dashboardId  仪表盘id。
    * version  仪表盘版本。
    * enterpriseProjectId  仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderName  仪表盘分组名称。
    * folderId  仪表盘分组id。
    * syncData  待同步的仪表盘数。
    * isCreateAction  是否创建 - false：更新 - true：创建
    * dashboardTags  仪表盘标签列表。
    * isFavorite  是否收藏 - true：收藏 - false：不收藏
    * created  仪表盘创建时间。
    * updated  仪表盘更新时间。
    * createdBy  创建仪表盘的账号名称。
    * updatedBy  更新仪表盘的账号名称。
    * charts  仪表盘图表详情。
    * templating  仪表盘变量列表。
    * display  是否展示。
    * queryCount  查询总次数。
    * timeRange  默认查询时间范围。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'dashboardType' => 'string',
            'dashboardTitle' => 'string',
            'dashboardTitleEn' => 'string',
            'dashboardId' => 'string',
            'version' => 'string',
            'enterpriseProjectId' => 'string',
            'folderName' => 'string',
            'folderId' => 'string',
            'syncData' => 'string',
            'isCreateAction' => 'bool',
            'dashboardTags' => 'map[string,string][]',
            'isFavorite' => 'bool',
            'created' => 'int',
            'updated' => 'int',
            'createdBy' => 'string',
            'updatedBy' => 'string',
            'charts' => 'object',
            'templating' => 'object',
            'display' => 'bool',
            'queryCount' => 'int',
            'timeRange' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * dashboardType  仪表盘类型。
    * dashboardTitle  仪表盘名称。
    * dashboardTitleEn  仪表盘英文名称。
    * dashboardId  仪表盘id。
    * version  仪表盘版本。
    * enterpriseProjectId  仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderName  仪表盘分组名称。
    * folderId  仪表盘分组id。
    * syncData  待同步的仪表盘数。
    * isCreateAction  是否创建 - false：更新 - true：创建
    * dashboardTags  仪表盘标签列表。
    * isFavorite  是否收藏 - true：收藏 - false：不收藏
    * created  仪表盘创建时间。
    * updated  仪表盘更新时间。
    * createdBy  创建仪表盘的账号名称。
    * updatedBy  更新仪表盘的账号名称。
    * charts  仪表盘图表详情。
    * templating  仪表盘变量列表。
    * display  是否展示。
    * queryCount  查询总次数。
    * timeRange  默认查询时间范围。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'dashboardType' => null,
        'dashboardTitle' => null,
        'dashboardTitleEn' => null,
        'dashboardId' => null,
        'version' => null,
        'enterpriseProjectId' => null,
        'folderName' => null,
        'folderId' => null,
        'syncData' => null,
        'isCreateAction' => null,
        'dashboardTags' => null,
        'isFavorite' => null,
        'created' => 'int64',
        'updated' => 'int64',
        'createdBy' => null,
        'updatedBy' => null,
        'charts' => null,
        'templating' => null,
        'display' => null,
        'queryCount' => 'int32',
        'timeRange' => null
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
    * projectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * dashboardType  仪表盘类型。
    * dashboardTitle  仪表盘名称。
    * dashboardTitleEn  仪表盘英文名称。
    * dashboardId  仪表盘id。
    * version  仪表盘版本。
    * enterpriseProjectId  仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderName  仪表盘分组名称。
    * folderId  仪表盘分组id。
    * syncData  待同步的仪表盘数。
    * isCreateAction  是否创建 - false：更新 - true：创建
    * dashboardTags  仪表盘标签列表。
    * isFavorite  是否收藏 - true：收藏 - false：不收藏
    * created  仪表盘创建时间。
    * updated  仪表盘更新时间。
    * createdBy  创建仪表盘的账号名称。
    * updatedBy  更新仪表盘的账号名称。
    * charts  仪表盘图表详情。
    * templating  仪表盘变量列表。
    * display  是否展示。
    * queryCount  查询总次数。
    * timeRange  默认查询时间范围。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'dashboardType' => 'dashboard_type',
            'dashboardTitle' => 'dashboard_title',
            'dashboardTitleEn' => 'dashboard_title_en',
            'dashboardId' => 'dashboard_id',
            'version' => 'version',
            'enterpriseProjectId' => 'enterprise_project_id',
            'folderName' => 'folder_name',
            'folderId' => 'folder_id',
            'syncData' => 'sync_data',
            'isCreateAction' => 'is_create_action',
            'dashboardTags' => 'dashboard_tags',
            'isFavorite' => 'is_favorite',
            'created' => 'created',
            'updated' => 'updated',
            'createdBy' => 'created_by',
            'updatedBy' => 'updated_by',
            'charts' => 'charts',
            'templating' => 'templating',
            'display' => 'display',
            'queryCount' => 'query_count',
            'timeRange' => 'time_range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * dashboardType  仪表盘类型。
    * dashboardTitle  仪表盘名称。
    * dashboardTitleEn  仪表盘英文名称。
    * dashboardId  仪表盘id。
    * version  仪表盘版本。
    * enterpriseProjectId  仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderName  仪表盘分组名称。
    * folderId  仪表盘分组id。
    * syncData  待同步的仪表盘数。
    * isCreateAction  是否创建 - false：更新 - true：创建
    * dashboardTags  仪表盘标签列表。
    * isFavorite  是否收藏 - true：收藏 - false：不收藏
    * created  仪表盘创建时间。
    * updated  仪表盘更新时间。
    * createdBy  创建仪表盘的账号名称。
    * updatedBy  更新仪表盘的账号名称。
    * charts  仪表盘图表详情。
    * templating  仪表盘变量列表。
    * display  是否展示。
    * queryCount  查询总次数。
    * timeRange  默认查询时间范围。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'dashboardType' => 'setDashboardType',
            'dashboardTitle' => 'setDashboardTitle',
            'dashboardTitleEn' => 'setDashboardTitleEn',
            'dashboardId' => 'setDashboardId',
            'version' => 'setVersion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'folderName' => 'setFolderName',
            'folderId' => 'setFolderId',
            'syncData' => 'setSyncData',
            'isCreateAction' => 'setIsCreateAction',
            'dashboardTags' => 'setDashboardTags',
            'isFavorite' => 'setIsFavorite',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'createdBy' => 'setCreatedBy',
            'updatedBy' => 'setUpdatedBy',
            'charts' => 'setCharts',
            'templating' => 'setTemplating',
            'display' => 'setDisplay',
            'queryCount' => 'setQueryCount',
            'timeRange' => 'setTimeRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    * dashboardType  仪表盘类型。
    * dashboardTitle  仪表盘名称。
    * dashboardTitleEn  仪表盘英文名称。
    * dashboardId  仪表盘id。
    * version  仪表盘版本。
    * enterpriseProjectId  仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderName  仪表盘分组名称。
    * folderId  仪表盘分组id。
    * syncData  待同步的仪表盘数。
    * isCreateAction  是否创建 - false：更新 - true：创建
    * dashboardTags  仪表盘标签列表。
    * isFavorite  是否收藏 - true：收藏 - false：不收藏
    * created  仪表盘创建时间。
    * updated  仪表盘更新时间。
    * createdBy  创建仪表盘的账号名称。
    * updatedBy  更新仪表盘的账号名称。
    * charts  仪表盘图表详情。
    * templating  仪表盘变量列表。
    * display  是否展示。
    * queryCount  查询总次数。
    * timeRange  默认查询时间范围。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'dashboardType' => 'getDashboardType',
            'dashboardTitle' => 'getDashboardTitle',
            'dashboardTitleEn' => 'getDashboardTitleEn',
            'dashboardId' => 'getDashboardId',
            'version' => 'getVersion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'folderName' => 'getFolderName',
            'folderId' => 'getFolderId',
            'syncData' => 'getSyncData',
            'isCreateAction' => 'getIsCreateAction',
            'dashboardTags' => 'getDashboardTags',
            'isFavorite' => 'getIsFavorite',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'createdBy' => 'getCreatedBy',
            'updatedBy' => 'getUpdatedBy',
            'charts' => 'getCharts',
            'templating' => 'getTemplating',
            'display' => 'getDisplay',
            'queryCount' => 'getQueryCount',
            'timeRange' => 'getTimeRange'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['dashboardType'] = isset($data['dashboardType']) ? $data['dashboardType'] : null;
        $this->container['dashboardTitle'] = isset($data['dashboardTitle']) ? $data['dashboardTitle'] : null;
        $this->container['dashboardTitleEn'] = isset($data['dashboardTitleEn']) ? $data['dashboardTitleEn'] : null;
        $this->container['dashboardId'] = isset($data['dashboardId']) ? $data['dashboardId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['folderName'] = isset($data['folderName']) ? $data['folderName'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['syncData'] = isset($data['syncData']) ? $data['syncData'] : null;
        $this->container['isCreateAction'] = isset($data['isCreateAction']) ? $data['isCreateAction'] : null;
        $this->container['dashboardTags'] = isset($data['dashboardTags']) ? $data['dashboardTags'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['charts'] = isset($data['charts']) ? $data['charts'] : null;
        $this->container['templating'] = isset($data['templating']) ? $data['templating'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['queryCount'] = isset($data['queryCount']) ? $data['queryCount'] : null;
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
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
    * Gets projectId
    *  项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
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
    * @param string|null $projectId 项目ID，可以从控制台获取，也可以从调用API处获取。获取方式请参见：[获取项目ID](aom_04_0024.xml)。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets dashboardType
    *  仪表盘类型。
    *
    * @return string|null
    */
    public function getDashboardType()
    {
        return $this->container['dashboardType'];
    }

    /**
    * Sets dashboardType
    *
    * @param string|null $dashboardType 仪表盘类型。
    *
    * @return $this
    */
    public function setDashboardType($dashboardType)
    {
        $this->container['dashboardType'] = $dashboardType;
        return $this;
    }

    /**
    * Gets dashboardTitle
    *  仪表盘名称。
    *
    * @return string|null
    */
    public function getDashboardTitle()
    {
        return $this->container['dashboardTitle'];
    }

    /**
    * Sets dashboardTitle
    *
    * @param string|null $dashboardTitle 仪表盘名称。
    *
    * @return $this
    */
    public function setDashboardTitle($dashboardTitle)
    {
        $this->container['dashboardTitle'] = $dashboardTitle;
        return $this;
    }

    /**
    * Gets dashboardTitleEn
    *  仪表盘英文名称。
    *
    * @return string|null
    */
    public function getDashboardTitleEn()
    {
        return $this->container['dashboardTitleEn'];
    }

    /**
    * Sets dashboardTitleEn
    *
    * @param string|null $dashboardTitleEn 仪表盘英文名称。
    *
    * @return $this
    */
    public function setDashboardTitleEn($dashboardTitleEn)
    {
        $this->container['dashboardTitleEn'] = $dashboardTitleEn;
        return $this;
    }

    /**
    * Gets dashboardId
    *  仪表盘id。
    *
    * @return string|null
    */
    public function getDashboardId()
    {
        return $this->container['dashboardId'];
    }

    /**
    * Sets dashboardId
    *
    * @param string|null $dashboardId 仪表盘id。
    *
    * @return $this
    */
    public function setDashboardId($dashboardId)
    {
        $this->container['dashboardId'] = $dashboardId;
        return $this;
    }

    /**
    * Gets version
    *  仪表盘版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 仪表盘版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 仪表盘企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets folderName
    *  仪表盘分组名称。
    *
    * @return string|null
    */
    public function getFolderName()
    {
        return $this->container['folderName'];
    }

    /**
    * Sets folderName
    *
    * @param string|null $folderName 仪表盘分组名称。
    *
    * @return $this
    */
    public function setFolderName($folderName)
    {
        $this->container['folderName'] = $folderName;
        return $this;
    }

    /**
    * Gets folderId
    *  仪表盘分组id。
    *
    * @return string|null
    */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
    * Sets folderId
    *
    * @param string|null $folderId 仪表盘分组id。
    *
    * @return $this
    */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;
        return $this;
    }

    /**
    * Gets syncData
    *  待同步的仪表盘数。
    *
    * @return string|null
    */
    public function getSyncData()
    {
        return $this->container['syncData'];
    }

    /**
    * Sets syncData
    *
    * @param string|null $syncData 待同步的仪表盘数。
    *
    * @return $this
    */
    public function setSyncData($syncData)
    {
        $this->container['syncData'] = $syncData;
        return $this;
    }

    /**
    * Gets isCreateAction
    *  是否创建 - false：更新 - true：创建
    *
    * @return bool|null
    */
    public function getIsCreateAction()
    {
        return $this->container['isCreateAction'];
    }

    /**
    * Sets isCreateAction
    *
    * @param bool|null $isCreateAction 是否创建 - false：更新 - true：创建
    *
    * @return $this
    */
    public function setIsCreateAction($isCreateAction)
    {
        $this->container['isCreateAction'] = $isCreateAction;
        return $this;
    }

    /**
    * Gets dashboardTags
    *  仪表盘标签列表。
    *
    * @return map[string,string][]|null
    */
    public function getDashboardTags()
    {
        return $this->container['dashboardTags'];
    }

    /**
    * Sets dashboardTags
    *
    * @param map[string,string][]|null $dashboardTags 仪表盘标签列表。
    *
    * @return $this
    */
    public function setDashboardTags($dashboardTags)
    {
        $this->container['dashboardTags'] = $dashboardTags;
        return $this;
    }

    /**
    * Gets isFavorite
    *  是否收藏 - true：收藏 - false：不收藏
    *
    * @return bool|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param bool|null $isFavorite 是否收藏 - true：收藏 - false：不收藏
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets created
    *  仪表盘创建时间。
    *
    * @return int|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int|null $created 仪表盘创建时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  仪表盘更新时间。
    *
    * @return int|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param int|null $updated 仪表盘更新时间。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建仪表盘的账号名称。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建仪表盘的账号名称。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets updatedBy
    *  更新仪表盘的账号名称。
    *
    * @return string|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param string|null $updatedBy 更新仪表盘的账号名称。
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets charts
    *  仪表盘图表详情。
    *
    * @return object|null
    */
    public function getCharts()
    {
        return $this->container['charts'];
    }

    /**
    * Sets charts
    *
    * @param object|null $charts 仪表盘图表详情。
    *
    * @return $this
    */
    public function setCharts($charts)
    {
        $this->container['charts'] = $charts;
        return $this;
    }

    /**
    * Gets templating
    *  仪表盘变量列表。
    *
    * @return object|null
    */
    public function getTemplating()
    {
        return $this->container['templating'];
    }

    /**
    * Sets templating
    *
    * @param object|null $templating 仪表盘变量列表。
    *
    * @return $this
    */
    public function setTemplating($templating)
    {
        $this->container['templating'] = $templating;
        return $this;
    }

    /**
    * Gets display
    *  是否展示。
    *
    * @return bool|null
    */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
    * Sets display
    *
    * @param bool|null $display 是否展示。
    *
    * @return $this
    */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;
        return $this;
    }

    /**
    * Gets queryCount
    *  查询总次数。
    *
    * @return int|null
    */
    public function getQueryCount()
    {
        return $this->container['queryCount'];
    }

    /**
    * Sets queryCount
    *
    * @param int|null $queryCount 查询总次数。
    *
    * @return $this
    */
    public function setQueryCount($queryCount)
    {
        $this->container['queryCount'] = $queryCount;
        return $this;
    }

    /**
    * Gets timeRange
    *  默认查询时间范围。
    *
    * @return string|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param string|null $timeRange 默认查询时间范围。
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
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

