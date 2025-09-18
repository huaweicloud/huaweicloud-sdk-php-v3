<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublisherVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublisherVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publisherUniqueId  **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 发布商描述。 **取值范围**： 不涉及。
    * logoUrl  **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    * website  **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    * supportUrl  **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    * sourceUrl  **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    * enName  **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    * name  **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
    * authStatus  **参数解释**： 授权状态。 **取值范围**： 不涉及。
    * isDelete  **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    * lastUpdateUserName  **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    * lastUpdateUserId  **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    * lastUpdateTime  **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publisherUniqueId' => 'string',
            'userId' => 'string',
            'tenantId' => 'string',
            'description' => 'string',
            'logoUrl' => 'string',
            'website' => 'string',
            'supportUrl' => 'string',
            'sourceUrl' => 'string',
            'enName' => 'string',
            'name' => 'string',
            'authStatus' => 'string',
            'isDelete' => 'int',
            'lastUpdateUserName' => 'string',
            'lastUpdateUserId' => 'string',
            'lastUpdateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publisherUniqueId  **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 发布商描述。 **取值范围**： 不涉及。
    * logoUrl  **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    * website  **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    * supportUrl  **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    * sourceUrl  **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    * enName  **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    * name  **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
    * authStatus  **参数解释**： 授权状态。 **取值范围**： 不涉及。
    * isDelete  **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    * lastUpdateUserName  **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    * lastUpdateUserId  **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    * lastUpdateTime  **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publisherUniqueId' => null,
        'userId' => null,
        'tenantId' => null,
        'description' => null,
        'logoUrl' => null,
        'website' => null,
        'supportUrl' => null,
        'sourceUrl' => null,
        'enName' => null,
        'name' => null,
        'authStatus' => null,
        'isDelete' => 'int32',
        'lastUpdateUserName' => null,
        'lastUpdateUserId' => null,
        'lastUpdateTime' => null
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
    * publisherUniqueId  **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 发布商描述。 **取值范围**： 不涉及。
    * logoUrl  **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    * website  **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    * supportUrl  **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    * sourceUrl  **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    * enName  **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    * name  **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
    * authStatus  **参数解释**： 授权状态。 **取值范围**： 不涉及。
    * isDelete  **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    * lastUpdateUserName  **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    * lastUpdateUserId  **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    * lastUpdateTime  **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publisherUniqueId' => 'publisher_unique_id',
            'userId' => 'user_id',
            'tenantId' => 'tenant_id',
            'description' => 'description',
            'logoUrl' => 'logo_url',
            'website' => 'website',
            'supportUrl' => 'support_url',
            'sourceUrl' => 'source_url',
            'enName' => 'en_name',
            'name' => 'name',
            'authStatus' => 'auth_status',
            'isDelete' => 'is_delete',
            'lastUpdateUserName' => 'last_update_user_name',
            'lastUpdateUserId' => 'last_update_user_id',
            'lastUpdateTime' => 'last_update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publisherUniqueId  **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 发布商描述。 **取值范围**： 不涉及。
    * logoUrl  **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    * website  **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    * supportUrl  **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    * sourceUrl  **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    * enName  **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    * name  **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
    * authStatus  **参数解释**： 授权状态。 **取值范围**： 不涉及。
    * isDelete  **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    * lastUpdateUserName  **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    * lastUpdateUserId  **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    * lastUpdateTime  **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'publisherUniqueId' => 'setPublisherUniqueId',
            'userId' => 'setUserId',
            'tenantId' => 'setTenantId',
            'description' => 'setDescription',
            'logoUrl' => 'setLogoUrl',
            'website' => 'setWebsite',
            'supportUrl' => 'setSupportUrl',
            'sourceUrl' => 'setSourceUrl',
            'enName' => 'setEnName',
            'name' => 'setName',
            'authStatus' => 'setAuthStatus',
            'isDelete' => 'setIsDelete',
            'lastUpdateUserName' => 'setLastUpdateUserName',
            'lastUpdateUserId' => 'setLastUpdateUserId',
            'lastUpdateTime' => 'setLastUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publisherUniqueId  **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    * userId  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    * tenantId  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    * description  **参数解释**： 发布商描述。 **取值范围**： 不涉及。
    * logoUrl  **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    * website  **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    * supportUrl  **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    * sourceUrl  **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    * enName  **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    * name  **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
    * authStatus  **参数解释**： 授权状态。 **取值范围**： 不涉及。
    * isDelete  **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    * lastUpdateUserName  **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    * lastUpdateUserId  **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    * lastUpdateTime  **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'publisherUniqueId' => 'getPublisherUniqueId',
            'userId' => 'getUserId',
            'tenantId' => 'getTenantId',
            'description' => 'getDescription',
            'logoUrl' => 'getLogoUrl',
            'website' => 'getWebsite',
            'supportUrl' => 'getSupportUrl',
            'sourceUrl' => 'getSourceUrl',
            'enName' => 'getEnName',
            'name' => 'getName',
            'authStatus' => 'getAuthStatus',
            'isDelete' => 'getIsDelete',
            'lastUpdateUserName' => 'getLastUpdateUserName',
            'lastUpdateUserId' => 'getLastUpdateUserId',
            'lastUpdateTime' => 'getLastUpdateTime'
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
        $this->container['publisherUniqueId'] = isset($data['publisherUniqueId']) ? $data['publisherUniqueId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['logoUrl'] = isset($data['logoUrl']) ? $data['logoUrl'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['supportUrl'] = isset($data['supportUrl']) ? $data['supportUrl'] : null;
        $this->container['sourceUrl'] = isset($data['sourceUrl']) ? $data['sourceUrl'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['authStatus'] = isset($data['authStatus']) ? $data['authStatus'] : null;
        $this->container['isDelete'] = isset($data['isDelete']) ? $data['isDelete'] : null;
        $this->container['lastUpdateUserName'] = isset($data['lastUpdateUserName']) ? $data['lastUpdateUserName'] : null;
        $this->container['lastUpdateUserId'] = isset($data['lastUpdateUserId']) ? $data['lastUpdateUserId'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
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
    * Gets publisherUniqueId
    *  **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPublisherUniqueId()
    {
        return $this->container['publisherUniqueId'];
    }

    /**
    * Sets publisherUniqueId
    *
    * @param string|null $publisherUniqueId **参数解释**： 发布商ID。可通过[查询发布商详情](ShowPublisher.xml)查询。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublisherUniqueId($publisherUniqueId)
    {
        $this->container['publisherUniqueId'] = $publisherUniqueId;
        return $this;
    }

    /**
    * Gets userId
    *  **参数解释**： 用户ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId **参数解释**： 用户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释**： 租户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 发布商描述。 **取值范围**： 不涉及。
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
    * @param string|null $description **参数解释**： 发布商描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets logoUrl
    *  **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogoUrl()
    {
        return $this->container['logoUrl'];
    }

    /**
    * Sets logoUrl
    *
    * @param string|null $logoUrl **参数解释**： 发布商图标URL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogoUrl($logoUrl)
    {
        $this->container['logoUrl'] = $logoUrl;
        return $this;
    }

    /**
    * Gets website
    *  **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
    * Sets website
    *
    * @param string|null $website **参数解释**： 创建发布商时填入的网页地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;
        return $this;
    }

    /**
    * Gets supportUrl
    *  **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSupportUrl()
    {
        return $this->container['supportUrl'];
    }

    /**
    * Sets supportUrl
    *
    * @param string|null $supportUrl **参数解释**： 创建发布商时填入的帮助地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSupportUrl($supportUrl)
    {
        $this->container['supportUrl'] = $supportUrl;
        return $this;
    }

    /**
    * Gets sourceUrl
    *  **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceUrl()
    {
        return $this->container['sourceUrl'];
    }

    /**
    * Sets sourceUrl
    *
    * @param string|null $sourceUrl **参数解释**： 创建发布商时填入的源地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceUrl($sourceUrl)
    {
        $this->container['sourceUrl'] = $sourceUrl;
        return $this;
    }

    /**
    * Gets enName
    *  **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName **参数解释**： 发布商英文名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 发布商中文名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets authStatus
    *  **参数解释**： 授权状态。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getAuthStatus()
    {
        return $this->container['authStatus'];
    }

    /**
    * Sets authStatus
    *
    * @param string|null $authStatus **参数解释**： 授权状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAuthStatus($authStatus)
    {
        $this->container['authStatus'] = $authStatus;
        return $this;
    }

    /**
    * Gets isDelete
    *  **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    *
    * @return int|null
    */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
    * Sets isDelete
    *
    * @param int|null $isDelete **参数解释**： 是否删除。 **取值范围**： - 0：未删除。 - 1：已删除。
    *
    * @return $this
    */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;
        return $this;
    }

    /**
    * Gets lastUpdateUserName
    *  **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLastUpdateUserName()
    {
        return $this->container['lastUpdateUserName'];
    }

    /**
    * Sets lastUpdateUserName
    *
    * @param string|null $lastUpdateUserName **参数解释**： 最后更新人名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLastUpdateUserName($lastUpdateUserName)
    {
        $this->container['lastUpdateUserName'] = $lastUpdateUserName;
        return $this;
    }

    /**
    * Gets lastUpdateUserId
    *  **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLastUpdateUserId()
    {
        return $this->container['lastUpdateUserId'];
    }

    /**
    * Sets lastUpdateUserId
    *
    * @param string|null $lastUpdateUserId **参数解释**： 最后更新人用户ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLastUpdateUserId($lastUpdateUserId)
    {
        $this->container['lastUpdateUserId'] = $lastUpdateUserId;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param string|null $lastUpdateTime **参数解释**： 最后更新时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
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

