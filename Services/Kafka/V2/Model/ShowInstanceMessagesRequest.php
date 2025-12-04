<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceMessagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceMessagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * asc  **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * download  **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    * messageOffset  **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * partition  **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * keyword  **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    * key  **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * include  **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    * exclude  **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'topic' => 'string',
            'asc' => 'bool',
            'startTime' => 'string',
            'endTime' => 'string',
            'limit' => 'string',
            'offset' => 'string',
            'download' => 'bool',
            'messageOffset' => 'string',
            'partition' => 'string',
            'keyword' => 'string',
            'key' => 'string',
            'include' => 'string',
            'exclude' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * asc  **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * download  **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    * messageOffset  **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * partition  **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * keyword  **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    * key  **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * include  **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    * exclude  **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'topic' => null,
        'asc' => null,
        'startTime' => null,
        'endTime' => null,
        'limit' => null,
        'offset' => null,
        'download' => null,
        'messageOffset' => null,
        'partition' => null,
        'keyword' => null,
        'key' => null,
        'include' => null,
        'exclude' => null
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
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * asc  **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * download  **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    * messageOffset  **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * partition  **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * keyword  **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    * key  **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * include  **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    * exclude  **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'topic' => 'topic',
            'asc' => 'asc',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'download' => 'download',
            'messageOffset' => 'message_offset',
            'partition' => 'partition',
            'keyword' => 'keyword',
            'key' => 'key',
            'include' => 'include',
            'exclude' => 'exclude'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * asc  **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * download  **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    * messageOffset  **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * partition  **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * keyword  **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    * key  **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * include  **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    * exclude  **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'topic' => 'setTopic',
            'asc' => 'setAsc',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'download' => 'setDownload',
            'messageOffset' => 'setMessageOffset',
            'partition' => 'setPartition',
            'keyword' => 'setKeyword',
            'key' => 'setKey',
            'include' => 'setInclude',
            'exclude' => 'setExclude'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * asc  **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    * startTime  **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * endTime  **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * download  **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    * messageOffset  **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * partition  **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * keyword  **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    * key  **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * include  **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    * exclude  **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'topic' => 'getTopic',
            'asc' => 'getAsc',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'download' => 'getDownload',
            'messageOffset' => 'getMessageOffset',
            'partition' => 'getPartition',
            'keyword' => 'getKeyword',
            'key' => 'getKey',
            'include' => 'getInclude',
            'exclude' => 'getExclude'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['asc'] = isset($data['asc']) ? $data['asc'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['download'] = isset($data['download']) ? $data['download'] : null;
        $this->container['messageOffset'] = isset($data['messageOffset']) ? $data['messageOffset'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['include'] = isset($data['include']) ? $data['include'] : null;
        $this->container['exclude'] = isset($data['exclude']) ? $data['exclude'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) > 50)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 50)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
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
    * Gets instanceId
    *  **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**： 实例ID。获取方法如下：调用“查询所有实例列表”接口，从响应体中获取实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets topic
    *  **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic **参数解释**： Topic名称。 **约束限制**： Topic名称必须以字母开头且只支持大小写字母、中横线、下划线以及数字。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets asc
    *  **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getAsc()
    {
        return $this->container['asc'];
    }

    /**
    * Sets asc
    *
    * @param bool|null $asc **参数解释**： 是否按照时间排序。 **约束限制**： 不涉及。 **取值范围**： - true：按照时间排序。 - false：不按照时间排序。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setAsc($asc)
    {
        $this->container['asc'] = $asc;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数解释**： 开始时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数解释**： 结束时间。  Unix毫秒时间戳。  **约束限制**： 查询消息偏移量时，为必选参数。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit **参数解释**： 每一页显示的消息数量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset **参数解释**： 页数。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets download
    *  **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    *
    * @return bool|null
    */
    public function getDownload()
    {
        return $this->container['download'];
    }

    /**
    * Sets download
    *
    * @param bool|null $download **参数解释**： 是否下载消息到本地。 **约束限制**： 不涉及。 **取值范围**： - true：下载。 - false：不下载。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDownload($download)
    {
        $this->container['download'] = $download;
        return $this;
    }

    /**
    * Gets messageOffset
    *  **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getMessageOffset()
    {
        return $this->container['messageOffset'];
    }

    /**
    * Sets messageOffset
    *
    * @param string|null $messageOffset **参数解释**： 消息偏移量。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMessageOffset($messageOffset)
    {
        $this->container['messageOffset'] = $messageOffset;
        return $this;
    }

    /**
    * Gets partition
    *  **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string|null $partition **参数解释**： 分区。 **约束限制**： 查询消息内容时，为必选参数。  若start_time、end_time参数不为空，该参数无效。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets keyword
    *  **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword **参数解释**： 设置查询消息的关键词。 **约束限制**： 不涉及。 **取值范围**： 0~50字符。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets key
    *  **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释**： 设置消息的KEY，查询结果为包含KEY的所有消息。 **约束限制**： 由于查询资源和性能限制，最大搜索10000条消息且所有消息总大小不超过200MB，最多返回包含KEY的前10条消息。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets include
    *  **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getInclude()
    {
        return $this->container['include'];
    }

    /**
    * Sets include
    *
    * @param string|null $include **参数解释**： 设置消息正文中包含的关键词，查询结果为包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setInclude($include)
    {
        $this->container['include'] = $include;
        return $this;
    }

    /**
    * Gets exclude
    *  **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getExclude()
    {
        return $this->container['exclude'];
    }

    /**
    * Sets exclude
    *
    * @param string|null $exclude **参数解释**： 设置消息正文中需要排除的关键词，查询结果为不包含此关键词的消息。 **约束限制**： 多个关键字用%2C隔开，%2C是“,”的URL编码形式。 **取值范围**： include与exclude的关键词总数不得超过20个。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setExclude($exclude)
    {
        $this->container['exclude'] = $exclude;
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

