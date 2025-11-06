<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DashBoardsFolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DashBoardsFolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * created  仪表盘分组创建时间。
    * updated  仪表盘分组更新时间。
    * createdBy  仪表盘分组创建账号。
    * dashboardIds  仪表盘分组下仪表盘id列表。
    * display  是否展示仪表盘分组。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderId  仪表盘分组id。
    * folderTitle  仪表盘分组名称。
    * folderTitleEn  仪表盘分组英文名称。
    * isTemplate  仪表盘分组是否为默认仪表盘分组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'created' => 'int',
            'updated' => 'int',
            'createdBy' => 'string',
            'dashboardIds' => 'string[]',
            'display' => 'bool',
            'enterpriseProjectId' => 'string',
            'folderId' => 'string',
            'folderTitle' => 'string',
            'folderTitleEn' => 'string',
            'isTemplate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * created  仪表盘分组创建时间。
    * updated  仪表盘分组更新时间。
    * createdBy  仪表盘分组创建账号。
    * dashboardIds  仪表盘分组下仪表盘id列表。
    * display  是否展示仪表盘分组。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderId  仪表盘分组id。
    * folderTitle  仪表盘分组名称。
    * folderTitleEn  仪表盘分组英文名称。
    * isTemplate  仪表盘分组是否为默认仪表盘分组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'created' => 'int64',
        'updated' => 'int64',
        'createdBy' => null,
        'dashboardIds' => null,
        'display' => null,
        'enterpriseProjectId' => null,
        'folderId' => null,
        'folderTitle' => null,
        'folderTitleEn' => null,
        'isTemplate' => null
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
    * created  仪表盘分组创建时间。
    * updated  仪表盘分组更新时间。
    * createdBy  仪表盘分组创建账号。
    * dashboardIds  仪表盘分组下仪表盘id列表。
    * display  是否展示仪表盘分组。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderId  仪表盘分组id。
    * folderTitle  仪表盘分组名称。
    * folderTitleEn  仪表盘分组英文名称。
    * isTemplate  仪表盘分组是否为默认仪表盘分组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'created' => 'created',
            'updated' => 'updated',
            'createdBy' => 'created_by',
            'dashboardIds' => 'dashboard_ids',
            'display' => 'display',
            'enterpriseProjectId' => 'enterprise_project_id',
            'folderId' => 'folder_id',
            'folderTitle' => 'folder_title',
            'folderTitleEn' => 'folder_title_en',
            'isTemplate' => 'is_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * created  仪表盘分组创建时间。
    * updated  仪表盘分组更新时间。
    * createdBy  仪表盘分组创建账号。
    * dashboardIds  仪表盘分组下仪表盘id列表。
    * display  是否展示仪表盘分组。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderId  仪表盘分组id。
    * folderTitle  仪表盘分组名称。
    * folderTitleEn  仪表盘分组英文名称。
    * isTemplate  仪表盘分组是否为默认仪表盘分组。
    *
    * @var string[]
    */
    protected static $setters = [
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'createdBy' => 'setCreatedBy',
            'dashboardIds' => 'setDashboardIds',
            'display' => 'setDisplay',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'folderId' => 'setFolderId',
            'folderTitle' => 'setFolderTitle',
            'folderTitleEn' => 'setFolderTitleEn',
            'isTemplate' => 'setIsTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * created  仪表盘分组创建时间。
    * updated  仪表盘分组更新时间。
    * createdBy  仪表盘分组创建账号。
    * dashboardIds  仪表盘分组下仪表盘id列表。
    * display  是否展示仪表盘分组。
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    * folderId  仪表盘分组id。
    * folderTitle  仪表盘分组名称。
    * folderTitleEn  仪表盘分组英文名称。
    * isTemplate  仪表盘分组是否为默认仪表盘分组。
    *
    * @var string[]
    */
    protected static $getters = [
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'createdBy' => 'getCreatedBy',
            'dashboardIds' => 'getDashboardIds',
            'display' => 'getDisplay',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'folderId' => 'getFolderId',
            'folderTitle' => 'getFolderTitle',
            'folderTitleEn' => 'getFolderTitleEn',
            'isTemplate' => 'getIsTemplate'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['dashboardIds'] = isset($data['dashboardIds']) ? $data['dashboardIds'] : null;
        $this->container['display'] = isset($data['display']) ? $data['display'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['folderTitle'] = isset($data['folderTitle']) ? $data['folderTitle'] : null;
        $this->container['folderTitleEn'] = isset($data['folderTitleEn']) ? $data['folderTitleEn'] : null;
        $this->container['isTemplate'] = isset($data['isTemplate']) ? $data['isTemplate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['dashboardIds'] === null) {
            $invalidProperties[] = "'dashboardIds' can't be null";
        }
        if ($this->container['display'] === null) {
            $invalidProperties[] = "'display' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['folderId'] === null) {
            $invalidProperties[] = "'folderId' can't be null";
        }
        if ($this->container['folderTitle'] === null) {
            $invalidProperties[] = "'folderTitle' can't be null";
        }
        if ($this->container['isTemplate'] === null) {
            $invalidProperties[] = "'isTemplate' can't be null";
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
    * Gets created
    *  仪表盘分组创建时间。
    *
    * @return int
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param int $created 仪表盘分组创建时间。
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
    *  仪表盘分组更新时间。
    *
    * @return int
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param int $updated 仪表盘分组更新时间。
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
    *  仪表盘分组创建账号。
    *
    * @return string
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string $createdBy 仪表盘分组创建账号。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets dashboardIds
    *  仪表盘分组下仪表盘id列表。
    *
    * @return string[]
    */
    public function getDashboardIds()
    {
        return $this->container['dashboardIds'];
    }

    /**
    * Sets dashboardIds
    *
    * @param string[] $dashboardIds 仪表盘分组下仪表盘id列表。
    *
    * @return $this
    */
    public function setDashboardIds($dashboardIds)
    {
        $this->container['dashboardIds'] = $dashboardIds;
        return $this;
    }

    /**
    * Gets display
    *  是否展示仪表盘分组。
    *
    * @return bool
    */
    public function getDisplay()
    {
        return $this->container['display'];
    }

    /**
    * Sets display
    *
    * @param bool $display 是否展示仪表盘分组。
    *
    * @return $this
    */
    public function setDisplay($display)
    {
        $this->container['display'] = $display;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml)。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets folderId
    *  仪表盘分组id。
    *
    * @return string
    */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
    * Sets folderId
    *
    * @param string $folderId 仪表盘分组id。
    *
    * @return $this
    */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;
        return $this;
    }

    /**
    * Gets folderTitle
    *  仪表盘分组名称。
    *
    * @return string
    */
    public function getFolderTitle()
    {
        return $this->container['folderTitle'];
    }

    /**
    * Sets folderTitle
    *
    * @param string $folderTitle 仪表盘分组名称。
    *
    * @return $this
    */
    public function setFolderTitle($folderTitle)
    {
        $this->container['folderTitle'] = $folderTitle;
        return $this;
    }

    /**
    * Gets folderTitleEn
    *  仪表盘分组英文名称。
    *
    * @return string|null
    */
    public function getFolderTitleEn()
    {
        return $this->container['folderTitleEn'];
    }

    /**
    * Sets folderTitleEn
    *
    * @param string|null $folderTitleEn 仪表盘分组英文名称。
    *
    * @return $this
    */
    public function setFolderTitleEn($folderTitleEn)
    {
        $this->container['folderTitleEn'] = $folderTitleEn;
        return $this;
    }

    /**
    * Gets isTemplate
    *  仪表盘分组是否为默认仪表盘分组。
    *
    * @return bool
    */
    public function getIsTemplate()
    {
        return $this->container['isTemplate'];
    }

    /**
    * Sets isTemplate
    *
    * @param bool $isTemplate 仪表盘分组是否为默认仪表盘分组。
    *
    * @return $this
    */
    public function setIsTemplate($isTemplate)
    {
        $this->container['isTemplate'] = $isTemplate;
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

