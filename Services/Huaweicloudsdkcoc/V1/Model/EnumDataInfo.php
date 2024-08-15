<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnumDataInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnumDataInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * isDeleted  是否删除
    * matchType  匹配类型
    * ticketId  所属单号
    * nameZh  中文名
    * nameEn  英文名
    * userName  工号
    * fullNameZh  中文名
    * fullNameEn  英文名
    * nameZhPath  中文名路径
    * nameEnPath  中文名路径
    * status  status
    * bizId  唯一id
    * propId  字段id
    * modelId  模型id
    * enumTypeId  枚举类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentCloudServiceId' => 'string',
            'description' => 'string',
            'levelId' => 'string',
            'mtmRegion' => 'string',
            'mtmType' => 'string',
            'sourceId' => 'string',
            'title' => 'string',
            'isChangeEvent' => 'bool',
            'isServiceInterrupt' => 'bool',
            'isDeleted' => 'bool',
            'matchType' => 'string',
            'ticketId' => 'string',
            'nameZh' => 'string',
            'nameEn' => 'string',
            'userName' => 'string',
            'fullNameZh' => 'string',
            'fullNameEn' => 'string',
            'nameZhPath' => 'string',
            'nameEnPath' => 'string',
            'status' => 'string',
            'bizId' => 'string',
            'propId' => 'string',
            'modelId' => 'string',
            'enumTypeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * isDeleted  是否删除
    * matchType  匹配类型
    * ticketId  所属单号
    * nameZh  中文名
    * nameEn  英文名
    * userName  工号
    * fullNameZh  中文名
    * fullNameEn  英文名
    * nameZhPath  中文名路径
    * nameEnPath  中文名路径
    * status  status
    * bizId  唯一id
    * propId  字段id
    * modelId  模型id
    * enumTypeId  枚举类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentCloudServiceId' => null,
        'description' => null,
        'levelId' => null,
        'mtmRegion' => null,
        'mtmType' => null,
        'sourceId' => null,
        'title' => null,
        'isChangeEvent' => null,
        'isServiceInterrupt' => null,
        'isDeleted' => null,
        'matchType' => null,
        'ticketId' => null,
        'nameZh' => null,
        'nameEn' => null,
        'userName' => null,
        'fullNameZh' => null,
        'fullNameEn' => null,
        'nameZhPath' => null,
        'nameEnPath' => null,
        'status' => null,
        'bizId' => null,
        'propId' => null,
        'modelId' => null,
        'enumTypeId' => null
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
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * isDeleted  是否删除
    * matchType  匹配类型
    * ticketId  所属单号
    * nameZh  中文名
    * nameEn  英文名
    * userName  工号
    * fullNameZh  中文名
    * fullNameEn  英文名
    * nameZhPath  中文名路径
    * nameEnPath  中文名路径
    * status  status
    * bizId  唯一id
    * propId  字段id
    * modelId  模型id
    * enumTypeId  枚举类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentCloudServiceId' => 'current_cloud_service_id',
            'description' => 'description',
            'levelId' => 'level_id',
            'mtmRegion' => 'mtm_region',
            'mtmType' => 'mtm_type',
            'sourceId' => 'source_id',
            'title' => 'title',
            'isChangeEvent' => 'is_change_event',
            'isServiceInterrupt' => 'is_service_interrupt',
            'isDeleted' => 'is_deleted',
            'matchType' => 'match_type',
            'ticketId' => 'ticket_id',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en',
            'userName' => 'user_name',
            'fullNameZh' => 'full_name_zh',
            'fullNameEn' => 'full_name_en',
            'nameZhPath' => 'name_zh_path',
            'nameEnPath' => 'name_en_path',
            'status' => 'status',
            'bizId' => 'biz_id',
            'propId' => 'prop_id',
            'modelId' => 'model_id',
            'enumTypeId' => 'enum_type_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * isDeleted  是否删除
    * matchType  匹配类型
    * ticketId  所属单号
    * nameZh  中文名
    * nameEn  英文名
    * userName  工号
    * fullNameZh  中文名
    * fullNameEn  英文名
    * nameZhPath  中文名路径
    * nameEnPath  中文名路径
    * status  status
    * bizId  唯一id
    * propId  字段id
    * modelId  模型id
    * enumTypeId  枚举类型
    *
    * @var string[]
    */
    protected static $setters = [
            'currentCloudServiceId' => 'setCurrentCloudServiceId',
            'description' => 'setDescription',
            'levelId' => 'setLevelId',
            'mtmRegion' => 'setMtmRegion',
            'mtmType' => 'setMtmType',
            'sourceId' => 'setSourceId',
            'title' => 'setTitle',
            'isChangeEvent' => 'setIsChangeEvent',
            'isServiceInterrupt' => 'setIsServiceInterrupt',
            'isDeleted' => 'setIsDeleted',
            'matchType' => 'setMatchType',
            'ticketId' => 'setTicketId',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn',
            'userName' => 'setUserName',
            'fullNameZh' => 'setFullNameZh',
            'fullNameEn' => 'setFullNameEn',
            'nameZhPath' => 'setNameZhPath',
            'nameEnPath' => 'setNameEnPath',
            'status' => 'setStatus',
            'bizId' => 'setBizId',
            'propId' => 'setPropId',
            'modelId' => 'setModelId',
            'enumTypeId' => 'setEnumTypeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentCloudServiceId  扩展字段
    * description  扩展字段
    * levelId  扩展字段
    * mtmRegion  扩展字段
    * mtmType  扩展字段
    * sourceId  扩展字段
    * title  扩展字段
    * isChangeEvent  是否变更事件
    * isServiceInterrupt  是否变更事件
    * isDeleted  是否删除
    * matchType  匹配类型
    * ticketId  所属单号
    * nameZh  中文名
    * nameEn  英文名
    * userName  工号
    * fullNameZh  中文名
    * fullNameEn  英文名
    * nameZhPath  中文名路径
    * nameEnPath  中文名路径
    * status  status
    * bizId  唯一id
    * propId  字段id
    * modelId  模型id
    * enumTypeId  枚举类型
    *
    * @var string[]
    */
    protected static $getters = [
            'currentCloudServiceId' => 'getCurrentCloudServiceId',
            'description' => 'getDescription',
            'levelId' => 'getLevelId',
            'mtmRegion' => 'getMtmRegion',
            'mtmType' => 'getMtmType',
            'sourceId' => 'getSourceId',
            'title' => 'getTitle',
            'isChangeEvent' => 'getIsChangeEvent',
            'isServiceInterrupt' => 'getIsServiceInterrupt',
            'isDeleted' => 'getIsDeleted',
            'matchType' => 'getMatchType',
            'ticketId' => 'getTicketId',
            'nameZh' => 'getNameZh',
            'nameEn' => 'getNameEn',
            'userName' => 'getUserName',
            'fullNameZh' => 'getFullNameZh',
            'fullNameEn' => 'getFullNameEn',
            'nameZhPath' => 'getNameZhPath',
            'nameEnPath' => 'getNameEnPath',
            'status' => 'getStatus',
            'bizId' => 'getBizId',
            'propId' => 'getPropId',
            'modelId' => 'getModelId',
            'enumTypeId' => 'getEnumTypeId'
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
        $this->container['currentCloudServiceId'] = isset($data['currentCloudServiceId']) ? $data['currentCloudServiceId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['levelId'] = isset($data['levelId']) ? $data['levelId'] : null;
        $this->container['mtmRegion'] = isset($data['mtmRegion']) ? $data['mtmRegion'] : null;
        $this->container['mtmType'] = isset($data['mtmType']) ? $data['mtmType'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['isChangeEvent'] = isset($data['isChangeEvent']) ? $data['isChangeEvent'] : null;
        $this->container['isServiceInterrupt'] = isset($data['isServiceInterrupt']) ? $data['isServiceInterrupt'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['matchType'] = isset($data['matchType']) ? $data['matchType'] : null;
        $this->container['ticketId'] = isset($data['ticketId']) ? $data['ticketId'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['fullNameZh'] = isset($data['fullNameZh']) ? $data['fullNameZh'] : null;
        $this->container['fullNameEn'] = isset($data['fullNameEn']) ? $data['fullNameEn'] : null;
        $this->container['nameZhPath'] = isset($data['nameZhPath']) ? $data['nameZhPath'] : null;
        $this->container['nameEnPath'] = isset($data['nameEnPath']) ? $data['nameEnPath'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['propId'] = isset($data['propId']) ? $data['propId'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['enumTypeId'] = isset($data['enumTypeId']) ? $data['enumTypeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['currentCloudServiceId']) && (mb_strlen($this->container['currentCloudServiceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'currentCloudServiceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['levelId']) && (mb_strlen($this->container['levelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'levelId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['mtmRegion']) && (mb_strlen($this->container['mtmRegion']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmRegion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['mtmType']) && (mb_strlen($this->container['mtmType']) < 0)) {
                $invalidProperties[] = "invalid value for 'mtmType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 1410065408)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 1410065408.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['matchType']) && (mb_strlen($this->container['matchType']) < 0)) {
                $invalidProperties[] = "invalid value for 'matchType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['ticketId']) && (mb_strlen($this->container['ticketId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ticketId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 0)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fullNameZh']) && (mb_strlen($this->container['fullNameZh']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'fullNameZh', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['fullNameZh']) && (mb_strlen($this->container['fullNameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'fullNameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fullNameEn']) && (mb_strlen($this->container['fullNameEn']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'fullNameEn', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['fullNameEn']) && (mb_strlen($this->container['fullNameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'fullNameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZhPath']) && (mb_strlen($this->container['nameZhPath']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'nameZhPath', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['nameZhPath']) && (mb_strlen($this->container['nameZhPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZhPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameEnPath']) && (mb_strlen($this->container['nameEnPath']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'nameEnPath', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['nameEnPath']) && (mb_strlen($this->container['nameEnPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEnPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bizId']) && (mb_strlen($this->container['bizId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'bizId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['bizId']) && (mb_strlen($this->container['bizId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bizId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['propId']) && (mb_strlen($this->container['propId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'propId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['propId']) && (mb_strlen($this->container['propId']) < 0)) {
                $invalidProperties[] = "invalid value for 'propId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enumTypeId']) && (mb_strlen($this->container['enumTypeId']) > 100000000)) {
                $invalidProperties[] = "invalid value for 'enumTypeId', the character length must be smaller than or equal to 100000000.";
            }
            if (!is_null($this->container['enumTypeId']) && (mb_strlen($this->container['enumTypeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enumTypeId', the character length must be bigger than or equal to 0.";
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
    * Gets currentCloudServiceId
    *  扩展字段
    *
    * @return string|null
    */
    public function getCurrentCloudServiceId()
    {
        return $this->container['currentCloudServiceId'];
    }

    /**
    * Sets currentCloudServiceId
    *
    * @param string|null $currentCloudServiceId 扩展字段
    *
    * @return $this
    */
    public function setCurrentCloudServiceId($currentCloudServiceId)
    {
        $this->container['currentCloudServiceId'] = $currentCloudServiceId;
        return $this;
    }

    /**
    * Gets description
    *  扩展字段
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
    * @param string|null $description 扩展字段
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets levelId
    *  扩展字段
    *
    * @return string|null
    */
    public function getLevelId()
    {
        return $this->container['levelId'];
    }

    /**
    * Sets levelId
    *
    * @param string|null $levelId 扩展字段
    *
    * @return $this
    */
    public function setLevelId($levelId)
    {
        $this->container['levelId'] = $levelId;
        return $this;
    }

    /**
    * Gets mtmRegion
    *  扩展字段
    *
    * @return string|null
    */
    public function getMtmRegion()
    {
        return $this->container['mtmRegion'];
    }

    /**
    * Sets mtmRegion
    *
    * @param string|null $mtmRegion 扩展字段
    *
    * @return $this
    */
    public function setMtmRegion($mtmRegion)
    {
        $this->container['mtmRegion'] = $mtmRegion;
        return $this;
    }

    /**
    * Gets mtmType
    *  扩展字段
    *
    * @return string|null
    */
    public function getMtmType()
    {
        return $this->container['mtmType'];
    }

    /**
    * Sets mtmType
    *
    * @param string|null $mtmType 扩展字段
    *
    * @return $this
    */
    public function setMtmType($mtmType)
    {
        $this->container['mtmType'] = $mtmType;
        return $this;
    }

    /**
    * Gets sourceId
    *  扩展字段
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 扩展字段
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets title
    *  扩展字段
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 扩展字段
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets isChangeEvent
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsChangeEvent()
    {
        return $this->container['isChangeEvent'];
    }

    /**
    * Sets isChangeEvent
    *
    * @param bool|null $isChangeEvent 是否变更事件
    *
    * @return $this
    */
    public function setIsChangeEvent($isChangeEvent)
    {
        $this->container['isChangeEvent'] = $isChangeEvent;
        return $this;
    }

    /**
    * Gets isServiceInterrupt
    *  是否变更事件
    *
    * @return bool|null
    */
    public function getIsServiceInterrupt()
    {
        return $this->container['isServiceInterrupt'];
    }

    /**
    * Sets isServiceInterrupt
    *
    * @param bool|null $isServiceInterrupt 是否变更事件
    *
    * @return $this
    */
    public function setIsServiceInterrupt($isServiceInterrupt)
    {
        $this->container['isServiceInterrupt'] = $isServiceInterrupt;
        return $this;
    }

    /**
    * Gets isDeleted
    *  是否删除
    *
    * @return bool|null
    */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
    * Sets isDeleted
    *
    * @param bool|null $isDeleted 是否删除
    *
    * @return $this
    */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }

    /**
    * Gets matchType
    *  匹配类型
    *
    * @return string|null
    */
    public function getMatchType()
    {
        return $this->container['matchType'];
    }

    /**
    * Sets matchType
    *
    * @param string|null $matchType 匹配类型
    *
    * @return $this
    */
    public function setMatchType($matchType)
    {
        $this->container['matchType'] = $matchType;
        return $this;
    }

    /**
    * Gets ticketId
    *  所属单号
    *
    * @return string|null
    */
    public function getTicketId()
    {
        return $this->container['ticketId'];
    }

    /**
    * Sets ticketId
    *
    * @param string|null $ticketId 所属单号
    *
    * @return $this
    */
    public function setTicketId($ticketId)
    {
        $this->container['ticketId'] = $ticketId;
        return $this;
    }

    /**
    * Gets nameZh
    *  中文名
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh 中文名
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 英文名
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets userName
    *  工号
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 工号
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets fullNameZh
    *  中文名
    *
    * @return string|null
    */
    public function getFullNameZh()
    {
        return $this->container['fullNameZh'];
    }

    /**
    * Sets fullNameZh
    *
    * @param string|null $fullNameZh 中文名
    *
    * @return $this
    */
    public function setFullNameZh($fullNameZh)
    {
        $this->container['fullNameZh'] = $fullNameZh;
        return $this;
    }

    /**
    * Gets fullNameEn
    *  英文名
    *
    * @return string|null
    */
    public function getFullNameEn()
    {
        return $this->container['fullNameEn'];
    }

    /**
    * Sets fullNameEn
    *
    * @param string|null $fullNameEn 英文名
    *
    * @return $this
    */
    public function setFullNameEn($fullNameEn)
    {
        $this->container['fullNameEn'] = $fullNameEn;
        return $this;
    }

    /**
    * Gets nameZhPath
    *  中文名路径
    *
    * @return string|null
    */
    public function getNameZhPath()
    {
        return $this->container['nameZhPath'];
    }

    /**
    * Sets nameZhPath
    *
    * @param string|null $nameZhPath 中文名路径
    *
    * @return $this
    */
    public function setNameZhPath($nameZhPath)
    {
        $this->container['nameZhPath'] = $nameZhPath;
        return $this;
    }

    /**
    * Gets nameEnPath
    *  中文名路径
    *
    * @return string|null
    */
    public function getNameEnPath()
    {
        return $this->container['nameEnPath'];
    }

    /**
    * Sets nameEnPath
    *
    * @param string|null $nameEnPath 中文名路径
    *
    * @return $this
    */
    public function setNameEnPath($nameEnPath)
    {
        $this->container['nameEnPath'] = $nameEnPath;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets bizId
    *  唯一id
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
    * @param string|null $bizId 唯一id
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets propId
    *  字段id
    *
    * @return string|null
    */
    public function getPropId()
    {
        return $this->container['propId'];
    }

    /**
    * Sets propId
    *
    * @param string|null $propId 字段id
    *
    * @return $this
    */
    public function setPropId($propId)
    {
        $this->container['propId'] = $propId;
        return $this;
    }

    /**
    * Gets modelId
    *  模型id
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId 模型id
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets enumTypeId
    *  枚举类型
    *
    * @return string|null
    */
    public function getEnumTypeId()
    {
        return $this->container['enumTypeId'];
    }

    /**
    * Sets enumTypeId
    *
    * @param string|null $enumTypeId 枚举类型
    *
    * @return $this
    */
    public function setEnumTypeId($enumTypeId)
    {
        $this->container['enumTypeId'] = $enumTypeId;
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

