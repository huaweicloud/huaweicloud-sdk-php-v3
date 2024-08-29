<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TriggerEventDataRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TriggerEventDataRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
    * scheduleType  定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    * schedule  定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    * userEvent  附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    * type  API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    * path  APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    * protocol  API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    * reqMethod  API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    * groupId  API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    * groupName  API所属的分组名称
    * matchMode  API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    * envName  API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    * envId  API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    * auth  API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    * funcInfo  funcInfo
    * slDomain  APIG系统默认分配的子域名（APIG触发器参数）。
    * backendType  API的后端类型（APIG触发器参数）。
    * operations  自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    * instanceId  实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    * collectionName  集合名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbName  文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbPassword  文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    * batchSize  批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    * queueId  队列id（DMS触发器参数）。DMS触发器此参数必填。
    * consumerGroupId  消费组id（DMS触发器参数）。DMS触发器此参数必填。
    * pollingInterval  拉取周期。DIS、DMS触发器此参数必填。
    * streamName  通道名称（DIS触发器参数）。DIS触发器此参数必填。
    * sharditeratorType  起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    * pollingUnit  拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    * maxFetchBytes  最大提取字节数（DIS触发器参数）。
    * isSerial  串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    * logGroupId  日志组id（LTS触发器参数）。LTS触发器此参数必填。
    * logTopicId  日志流id（LTS触发器参数）。LTS触发器此参数必填。
    * bucket  桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    * prefix  前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    * suffix  后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    * events  触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    * topicUrn  主题URN（SMN触发器参数）。SMN触发器此参数必填。
    * topicIds  KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    * kafkaUser  KAFKA账户名（KAFKA触发器参数）。
    * kafkaPassword  KAFKA账户密码（KAFKA触发器参数）。
    * kafkaConnectAddress  KAFKA实例连接IP地址（KAFKA触发器参数）。
    * kafkaSslEnable  KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    * accessPassword  RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * accessUser  RABBITMQ账户名（RABBITMQ触发器参数）。
    * connectAddress  实例连接IP地址（RABBITMQ触发器参数）。
    * exchangeName  交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * vhost  虚拟机名称（RABBITMQ触发器参数）。
    * sslEnable  RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    * keyEncode  EG obs触发器是否对对象加密。
    * agency  使用的代理
    * channelName  通道名称
    * sourceName  事件源名称
    * createdTime  创建时间
    * status  触发器状态
    * triggerName  触发器名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'scheduleType' => 'string',
            'schedule' => 'string',
            'userEvent' => 'string',
            'type' => 'int',
            'path' => 'string',
            'protocol' => 'string',
            'reqMethod' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'matchMode' => 'string',
            'envName' => 'string',
            'envId' => 'string',
            'auth' => 'string',
            'funcInfo' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\ApigTriggerFuncInfo',
            'slDomain' => 'string',
            'backendType' => 'string',
            'operations' => 'string[]',
            'instanceId' => 'string',
            'collectionName' => 'string',
            'dbName' => 'string',
            'dbPassword' => 'string',
            'batchSize' => 'int',
            'queueId' => 'string',
            'consumerGroupId' => 'string',
            'pollingInterval' => 'int',
            'streamName' => 'string',
            'sharditeratorType' => 'string',
            'pollingUnit' => 'string',
            'maxFetchBytes' => 'int',
            'isSerial' => 'string',
            'logGroupId' => 'string',
            'logTopicId' => 'string',
            'bucket' => 'string',
            'prefix' => 'string',
            'suffix' => 'string',
            'events' => 'string[]',
            'topicUrn' => 'string',
            'topicIds' => 'string[]',
            'kafkaUser' => 'string',
            'kafkaPassword' => 'string',
            'kafkaConnectAddress' => 'string',
            'kafkaSslEnable' => 'bool',
            'accessPassword' => 'string',
            'accessUser' => 'string',
            'connectAddress' => 'string',
            'exchangeName' => 'string',
            'vhost' => 'string',
            'sslEnable' => 'bool',
            'keyEncode' => 'bool',
            'agency' => 'string',
            'channelName' => 'string',
            'sourceName' => 'string',
            'createdTime' => '\DateTime',
            'status' => 'string',
            'triggerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
    * scheduleType  定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    * schedule  定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    * userEvent  附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    * type  API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    * path  APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    * protocol  API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    * reqMethod  API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    * groupId  API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    * groupName  API所属的分组名称
    * matchMode  API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    * envName  API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    * envId  API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    * auth  API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    * funcInfo  funcInfo
    * slDomain  APIG系统默认分配的子域名（APIG触发器参数）。
    * backendType  API的后端类型（APIG触发器参数）。
    * operations  自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    * instanceId  实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    * collectionName  集合名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbName  文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbPassword  文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    * batchSize  批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    * queueId  队列id（DMS触发器参数）。DMS触发器此参数必填。
    * consumerGroupId  消费组id（DMS触发器参数）。DMS触发器此参数必填。
    * pollingInterval  拉取周期。DIS、DMS触发器此参数必填。
    * streamName  通道名称（DIS触发器参数）。DIS触发器此参数必填。
    * sharditeratorType  起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    * pollingUnit  拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    * maxFetchBytes  最大提取字节数（DIS触发器参数）。
    * isSerial  串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    * logGroupId  日志组id（LTS触发器参数）。LTS触发器此参数必填。
    * logTopicId  日志流id（LTS触发器参数）。LTS触发器此参数必填。
    * bucket  桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    * prefix  前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    * suffix  后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    * events  触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    * topicUrn  主题URN（SMN触发器参数）。SMN触发器此参数必填。
    * topicIds  KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    * kafkaUser  KAFKA账户名（KAFKA触发器参数）。
    * kafkaPassword  KAFKA账户密码（KAFKA触发器参数）。
    * kafkaConnectAddress  KAFKA实例连接IP地址（KAFKA触发器参数）。
    * kafkaSslEnable  KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    * accessPassword  RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * accessUser  RABBITMQ账户名（RABBITMQ触发器参数）。
    * connectAddress  实例连接IP地址（RABBITMQ触发器参数）。
    * exchangeName  交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * vhost  虚拟机名称（RABBITMQ触发器参数）。
    * sslEnable  RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    * keyEncode  EG obs触发器是否对对象加密。
    * agency  使用的代理
    * channelName  通道名称
    * sourceName  事件源名称
    * createdTime  创建时间
    * status  触发器状态
    * triggerName  触发器名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'scheduleType' => null,
        'schedule' => null,
        'userEvent' => null,
        'type' => 'int32',
        'path' => null,
        'protocol' => null,
        'reqMethod' => null,
        'groupId' => null,
        'groupName' => null,
        'matchMode' => null,
        'envName' => null,
        'envId' => null,
        'auth' => null,
        'funcInfo' => null,
        'slDomain' => null,
        'backendType' => null,
        'operations' => null,
        'instanceId' => null,
        'collectionName' => null,
        'dbName' => null,
        'dbPassword' => null,
        'batchSize' => 'int32',
        'queueId' => null,
        'consumerGroupId' => null,
        'pollingInterval' => 'int32',
        'streamName' => null,
        'sharditeratorType' => null,
        'pollingUnit' => null,
        'maxFetchBytes' => 'int32',
        'isSerial' => null,
        'logGroupId' => null,
        'logTopicId' => null,
        'bucket' => null,
        'prefix' => null,
        'suffix' => null,
        'events' => null,
        'topicUrn' => null,
        'topicIds' => null,
        'kafkaUser' => null,
        'kafkaPassword' => null,
        'kafkaConnectAddress' => null,
        'kafkaSslEnable' => null,
        'accessPassword' => null,
        'accessUser' => null,
        'connectAddress' => null,
        'exchangeName' => null,
        'vhost' => null,
        'sslEnable' => null,
        'keyEncode' => null,
        'agency' => null,
        'channelName' => null,
        'sourceName' => null,
        'createdTime' => 'date-time',
        'status' => null,
        'triggerName' => null
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
    * name  - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
    * scheduleType  定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    * schedule  定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    * userEvent  附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    * type  API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    * path  APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    * protocol  API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    * reqMethod  API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    * groupId  API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    * groupName  API所属的分组名称
    * matchMode  API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    * envName  API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    * envId  API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    * auth  API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    * funcInfo  funcInfo
    * slDomain  APIG系统默认分配的子域名（APIG触发器参数）。
    * backendType  API的后端类型（APIG触发器参数）。
    * operations  自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    * instanceId  实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    * collectionName  集合名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbName  文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbPassword  文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    * batchSize  批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    * queueId  队列id（DMS触发器参数）。DMS触发器此参数必填。
    * consumerGroupId  消费组id（DMS触发器参数）。DMS触发器此参数必填。
    * pollingInterval  拉取周期。DIS、DMS触发器此参数必填。
    * streamName  通道名称（DIS触发器参数）。DIS触发器此参数必填。
    * sharditeratorType  起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    * pollingUnit  拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    * maxFetchBytes  最大提取字节数（DIS触发器参数）。
    * isSerial  串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    * logGroupId  日志组id（LTS触发器参数）。LTS触发器此参数必填。
    * logTopicId  日志流id（LTS触发器参数）。LTS触发器此参数必填。
    * bucket  桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    * prefix  前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    * suffix  后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    * events  触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    * topicUrn  主题URN（SMN触发器参数）。SMN触发器此参数必填。
    * topicIds  KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    * kafkaUser  KAFKA账户名（KAFKA触发器参数）。
    * kafkaPassword  KAFKA账户密码（KAFKA触发器参数）。
    * kafkaConnectAddress  KAFKA实例连接IP地址（KAFKA触发器参数）。
    * kafkaSslEnable  KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    * accessPassword  RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * accessUser  RABBITMQ账户名（RABBITMQ触发器参数）。
    * connectAddress  实例连接IP地址（RABBITMQ触发器参数）。
    * exchangeName  交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * vhost  虚拟机名称（RABBITMQ触发器参数）。
    * sslEnable  RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    * keyEncode  EG obs触发器是否对对象加密。
    * agency  使用的代理
    * channelName  通道名称
    * sourceName  事件源名称
    * createdTime  创建时间
    * status  触发器状态
    * triggerName  触发器名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'scheduleType' => 'schedule_type',
            'schedule' => 'schedule',
            'userEvent' => 'user_event',
            'type' => 'type',
            'path' => 'path',
            'protocol' => 'protocol',
            'reqMethod' => 'req_method',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'matchMode' => 'match_mode',
            'envName' => 'env_name',
            'envId' => 'env_id',
            'auth' => 'auth',
            'funcInfo' => 'func_info',
            'slDomain' => 'sl_domain',
            'backendType' => 'backend_type',
            'operations' => 'operations',
            'instanceId' => 'instance_id',
            'collectionName' => 'collection_name',
            'dbName' => 'db_name',
            'dbPassword' => 'db_password',
            'batchSize' => 'batch_size',
            'queueId' => 'queue_id',
            'consumerGroupId' => 'consumer_group_id',
            'pollingInterval' => 'polling_interval',
            'streamName' => 'stream_name',
            'sharditeratorType' => 'sharditerator_type',
            'pollingUnit' => 'polling_unit',
            'maxFetchBytes' => 'max_fetch_bytes',
            'isSerial' => 'is_serial',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id',
            'bucket' => 'bucket',
            'prefix' => 'prefix',
            'suffix' => 'suffix',
            'events' => 'events',
            'topicUrn' => 'topic_urn',
            'topicIds' => 'topic_ids',
            'kafkaUser' => 'kafka_user',
            'kafkaPassword' => 'kafka_password',
            'kafkaConnectAddress' => 'kafka_connect_address',
            'kafkaSslEnable' => 'kafka_ssl_enable',
            'accessPassword' => 'access_password',
            'accessUser' => 'access_user',
            'connectAddress' => 'connect_address',
            'exchangeName' => 'exchange_name',
            'vhost' => 'vhost',
            'sslEnable' => 'ssl_enable',
            'keyEncode' => 'Key_encode',
            'agency' => 'agency',
            'channelName' => 'channel_name',
            'sourceName' => 'source_name',
            'createdTime' => 'created_time',
            'status' => 'status',
            'triggerName' => 'trigger_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
    * scheduleType  定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    * schedule  定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    * userEvent  附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    * type  API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    * path  APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    * protocol  API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    * reqMethod  API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    * groupId  API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    * groupName  API所属的分组名称
    * matchMode  API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    * envName  API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    * envId  API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    * auth  API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    * funcInfo  funcInfo
    * slDomain  APIG系统默认分配的子域名（APIG触发器参数）。
    * backendType  API的后端类型（APIG触发器参数）。
    * operations  自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    * instanceId  实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    * collectionName  集合名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbName  文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbPassword  文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    * batchSize  批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    * queueId  队列id（DMS触发器参数）。DMS触发器此参数必填。
    * consumerGroupId  消费组id（DMS触发器参数）。DMS触发器此参数必填。
    * pollingInterval  拉取周期。DIS、DMS触发器此参数必填。
    * streamName  通道名称（DIS触发器参数）。DIS触发器此参数必填。
    * sharditeratorType  起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    * pollingUnit  拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    * maxFetchBytes  最大提取字节数（DIS触发器参数）。
    * isSerial  串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    * logGroupId  日志组id（LTS触发器参数）。LTS触发器此参数必填。
    * logTopicId  日志流id（LTS触发器参数）。LTS触发器此参数必填。
    * bucket  桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    * prefix  前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    * suffix  后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    * events  触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    * topicUrn  主题URN（SMN触发器参数）。SMN触发器此参数必填。
    * topicIds  KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    * kafkaUser  KAFKA账户名（KAFKA触发器参数）。
    * kafkaPassword  KAFKA账户密码（KAFKA触发器参数）。
    * kafkaConnectAddress  KAFKA实例连接IP地址（KAFKA触发器参数）。
    * kafkaSslEnable  KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    * accessPassword  RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * accessUser  RABBITMQ账户名（RABBITMQ触发器参数）。
    * connectAddress  实例连接IP地址（RABBITMQ触发器参数）。
    * exchangeName  交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * vhost  虚拟机名称（RABBITMQ触发器参数）。
    * sslEnable  RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    * keyEncode  EG obs触发器是否对对象加密。
    * agency  使用的代理
    * channelName  通道名称
    * sourceName  事件源名称
    * createdTime  创建时间
    * status  触发器状态
    * triggerName  触发器名称
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'scheduleType' => 'setScheduleType',
            'schedule' => 'setSchedule',
            'userEvent' => 'setUserEvent',
            'type' => 'setType',
            'path' => 'setPath',
            'protocol' => 'setProtocol',
            'reqMethod' => 'setReqMethod',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'matchMode' => 'setMatchMode',
            'envName' => 'setEnvName',
            'envId' => 'setEnvId',
            'auth' => 'setAuth',
            'funcInfo' => 'setFuncInfo',
            'slDomain' => 'setSlDomain',
            'backendType' => 'setBackendType',
            'operations' => 'setOperations',
            'instanceId' => 'setInstanceId',
            'collectionName' => 'setCollectionName',
            'dbName' => 'setDbName',
            'dbPassword' => 'setDbPassword',
            'batchSize' => 'setBatchSize',
            'queueId' => 'setQueueId',
            'consumerGroupId' => 'setConsumerGroupId',
            'pollingInterval' => 'setPollingInterval',
            'streamName' => 'setStreamName',
            'sharditeratorType' => 'setSharditeratorType',
            'pollingUnit' => 'setPollingUnit',
            'maxFetchBytes' => 'setMaxFetchBytes',
            'isSerial' => 'setIsSerial',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId',
            'bucket' => 'setBucket',
            'prefix' => 'setPrefix',
            'suffix' => 'setSuffix',
            'events' => 'setEvents',
            'topicUrn' => 'setTopicUrn',
            'topicIds' => 'setTopicIds',
            'kafkaUser' => 'setKafkaUser',
            'kafkaPassword' => 'setKafkaPassword',
            'kafkaConnectAddress' => 'setKafkaConnectAddress',
            'kafkaSslEnable' => 'setKafkaSslEnable',
            'accessPassword' => 'setAccessPassword',
            'accessUser' => 'setAccessUser',
            'connectAddress' => 'setConnectAddress',
            'exchangeName' => 'setExchangeName',
            'vhost' => 'setVhost',
            'sslEnable' => 'setSslEnable',
            'keyEncode' => 'setKeyEncode',
            'agency' => 'setAgency',
            'channelName' => 'setChannelName',
            'sourceName' => 'setSourceName',
            'createdTime' => 'setCreatedTime',
            'status' => 'setStatus',
            'triggerName' => 'setTriggerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
    * scheduleType  定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    * schedule  定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    * userEvent  附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    * type  API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    * path  APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    * protocol  API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    * reqMethod  API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    * groupId  API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    * groupName  API所属的分组名称
    * matchMode  API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    * envName  API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    * envId  API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    * auth  API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    * funcInfo  funcInfo
    * slDomain  APIG系统默认分配的子域名（APIG触发器参数）。
    * backendType  API的后端类型（APIG触发器参数）。
    * operations  自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    * instanceId  实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    * collectionName  集合名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbName  文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    * dbPassword  文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    * batchSize  批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    * queueId  队列id（DMS触发器参数）。DMS触发器此参数必填。
    * consumerGroupId  消费组id（DMS触发器参数）。DMS触发器此参数必填。
    * pollingInterval  拉取周期。DIS、DMS触发器此参数必填。
    * streamName  通道名称（DIS触发器参数）。DIS触发器此参数必填。
    * sharditeratorType  起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    * pollingUnit  拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    * maxFetchBytes  最大提取字节数（DIS触发器参数）。
    * isSerial  串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    * logGroupId  日志组id（LTS触发器参数）。LTS触发器此参数必填。
    * logTopicId  日志流id（LTS触发器参数）。LTS触发器此参数必填。
    * bucket  桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    * prefix  前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    * suffix  后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    * events  触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    * topicUrn  主题URN（SMN触发器参数）。SMN触发器此参数必填。
    * topicIds  KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    * kafkaUser  KAFKA账户名（KAFKA触发器参数）。
    * kafkaPassword  KAFKA账户密码（KAFKA触发器参数）。
    * kafkaConnectAddress  KAFKA实例连接IP地址（KAFKA触发器参数）。
    * kafkaSslEnable  KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    * accessPassword  RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * accessUser  RABBITMQ账户名（RABBITMQ触发器参数）。
    * connectAddress  实例连接IP地址（RABBITMQ触发器参数）。
    * exchangeName  交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    * vhost  虚拟机名称（RABBITMQ触发器参数）。
    * sslEnable  RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    * keyEncode  EG obs触发器是否对对象加密。
    * agency  使用的代理
    * channelName  通道名称
    * sourceName  事件源名称
    * createdTime  创建时间
    * status  触发器状态
    * triggerName  触发器名称
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'scheduleType' => 'getScheduleType',
            'schedule' => 'getSchedule',
            'userEvent' => 'getUserEvent',
            'type' => 'getType',
            'path' => 'getPath',
            'protocol' => 'getProtocol',
            'reqMethod' => 'getReqMethod',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'matchMode' => 'getMatchMode',
            'envName' => 'getEnvName',
            'envId' => 'getEnvId',
            'auth' => 'getAuth',
            'funcInfo' => 'getFuncInfo',
            'slDomain' => 'getSlDomain',
            'backendType' => 'getBackendType',
            'operations' => 'getOperations',
            'instanceId' => 'getInstanceId',
            'collectionName' => 'getCollectionName',
            'dbName' => 'getDbName',
            'dbPassword' => 'getDbPassword',
            'batchSize' => 'getBatchSize',
            'queueId' => 'getQueueId',
            'consumerGroupId' => 'getConsumerGroupId',
            'pollingInterval' => 'getPollingInterval',
            'streamName' => 'getStreamName',
            'sharditeratorType' => 'getSharditeratorType',
            'pollingUnit' => 'getPollingUnit',
            'maxFetchBytes' => 'getMaxFetchBytes',
            'isSerial' => 'getIsSerial',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId',
            'bucket' => 'getBucket',
            'prefix' => 'getPrefix',
            'suffix' => 'getSuffix',
            'events' => 'getEvents',
            'topicUrn' => 'getTopicUrn',
            'topicIds' => 'getTopicIds',
            'kafkaUser' => 'getKafkaUser',
            'kafkaPassword' => 'getKafkaPassword',
            'kafkaConnectAddress' => 'getKafkaConnectAddress',
            'kafkaSslEnable' => 'getKafkaSslEnable',
            'accessPassword' => 'getAccessPassword',
            'accessUser' => 'getAccessUser',
            'connectAddress' => 'getConnectAddress',
            'exchangeName' => 'getExchangeName',
            'vhost' => 'getVhost',
            'sslEnable' => 'getSslEnable',
            'keyEncode' => 'getKeyEncode',
            'agency' => 'getAgency',
            'channelName' => 'getChannelName',
            'sourceName' => 'getSourceName',
            'createdTime' => 'getCreatedTime',
            'status' => 'getStatus',
            'triggerName' => 'getTriggerName'
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
    const SCHEDULE_TYPE_RATE = 'Rate';
    const SCHEDULE_TYPE_CRON = 'Cron';
    const PROTOCOL_HTTP = 'HTTP';
    const PROTOCOL_HTTPS = 'HTTPS';
    const REQ_METHOD_GET = 'GET';
    const REQ_METHOD_POST = 'POST';
    const REQ_METHOD_PUT = 'PUT';
    const REQ_METHOD_DELETE = 'DELETE';
    const REQ_METHOD_HEAD = 'HEAD';
    const REQ_METHOD_PATCH = 'PATCH';
    const REQ_METHOD_OPTIONS = 'OPTIONS';
    const REQ_METHOD_ANY = 'ANY';
    const MATCH_MODE_SWA = 'SWA';
    const MATCH_MODE_NORMAL = 'NORMAL';
    const AUTH_IAM = 'IAM';
    const AUTH_APP = 'APP';
    const AUTH_NONE = 'NONE';
    const BACKEND_TYPE__FUNCTION = 'FUNCTION';
    const SHARDITERATOR_TYPE_TRIM_HORIZON = 'TRIM_HORIZON';
    const SHARDITERATOR_TYPE_LATEST = 'LATEST';
    const POLLING_UNIT_S = 's';
    const POLLING_UNIT_MS = 'ms';
    const IS_SERIAL_TRUE = 'true';
    const IS_SERIAL_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScheduleTypeAllowableValues()
    {
        return [
            self::SCHEDULE_TYPE_RATE,
            self::SCHEDULE_TYPE_CRON,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_HTTP,
            self::PROTOCOL_HTTPS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReqMethodAllowableValues()
    {
        return [
            self::REQ_METHOD_GET,
            self::REQ_METHOD_POST,
            self::REQ_METHOD_PUT,
            self::REQ_METHOD_DELETE,
            self::REQ_METHOD_HEAD,
            self::REQ_METHOD_PATCH,
            self::REQ_METHOD_OPTIONS,
            self::REQ_METHOD_ANY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMatchModeAllowableValues()
    {
        return [
            self::MATCH_MODE_SWA,
            self::MATCH_MODE_NORMAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthAllowableValues()
    {
        return [
            self::AUTH_IAM,
            self::AUTH_APP,
            self::AUTH_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBackendTypeAllowableValues()
    {
        return [
            self::BACKEND_TYPE__FUNCTION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSharditeratorTypeAllowableValues()
    {
        return [
            self::SHARDITERATOR_TYPE_TRIM_HORIZON,
            self::SHARDITERATOR_TYPE_LATEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPollingUnitAllowableValues()
    {
        return [
            self::POLLING_UNIT_S,
            self::POLLING_UNIT_MS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsSerialAllowableValues()
    {
        return [
            self::IS_SERIAL_TRUE,
            self::IS_SERIAL_FALSE,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['scheduleType'] = isset($data['scheduleType']) ? $data['scheduleType'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['userEvent'] = isset($data['userEvent']) ? $data['userEvent'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['reqMethod'] = isset($data['reqMethod']) ? $data['reqMethod'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['matchMode'] = isset($data['matchMode']) ? $data['matchMode'] : null;
        $this->container['envName'] = isset($data['envName']) ? $data['envName'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['auth'] = isset($data['auth']) ? $data['auth'] : null;
        $this->container['funcInfo'] = isset($data['funcInfo']) ? $data['funcInfo'] : null;
        $this->container['slDomain'] = isset($data['slDomain']) ? $data['slDomain'] : null;
        $this->container['backendType'] = isset($data['backendType']) ? $data['backendType'] : null;
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['collectionName'] = isset($data['collectionName']) ? $data['collectionName'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['dbPassword'] = isset($data['dbPassword']) ? $data['dbPassword'] : null;
        $this->container['batchSize'] = isset($data['batchSize']) ? $data['batchSize'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['consumerGroupId'] = isset($data['consumerGroupId']) ? $data['consumerGroupId'] : null;
        $this->container['pollingInterval'] = isset($data['pollingInterval']) ? $data['pollingInterval'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['sharditeratorType'] = isset($data['sharditeratorType']) ? $data['sharditeratorType'] : null;
        $this->container['pollingUnit'] = isset($data['pollingUnit']) ? $data['pollingUnit'] : null;
        $this->container['maxFetchBytes'] = isset($data['maxFetchBytes']) ? $data['maxFetchBytes'] : null;
        $this->container['isSerial'] = isset($data['isSerial']) ? $data['isSerial'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['topicIds'] = isset($data['topicIds']) ? $data['topicIds'] : null;
        $this->container['kafkaUser'] = isset($data['kafkaUser']) ? $data['kafkaUser'] : null;
        $this->container['kafkaPassword'] = isset($data['kafkaPassword']) ? $data['kafkaPassword'] : null;
        $this->container['kafkaConnectAddress'] = isset($data['kafkaConnectAddress']) ? $data['kafkaConnectAddress'] : null;
        $this->container['kafkaSslEnable'] = isset($data['kafkaSslEnable']) ? $data['kafkaSslEnable'] : null;
        $this->container['accessPassword'] = isset($data['accessPassword']) ? $data['accessPassword'] : null;
        $this->container['accessUser'] = isset($data['accessUser']) ? $data['accessUser'] : null;
        $this->container['connectAddress'] = isset($data['connectAddress']) ? $data['connectAddress'] : null;
        $this->container['exchangeName'] = isset($data['exchangeName']) ? $data['exchangeName'] : null;
        $this->container['vhost'] = isset($data['vhost']) ? $data['vhost'] : null;
        $this->container['sslEnable'] = isset($data['sslEnable']) ? $data['sslEnable'] : null;
        $this->container['keyEncode'] = isset($data['keyEncode']) ? $data['keyEncode'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['triggerName'] = isset($data['triggerName']) ? $data['triggerName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getScheduleTypeAllowableValues();
                if (!is_null($this->container['scheduleType']) && !in_array($this->container['scheduleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheduleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getReqMethodAllowableValues();
                if (!is_null($this->container['reqMethod']) && !in_array($this->container['reqMethod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'reqMethod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMatchModeAllowableValues();
                if (!is_null($this->container['matchMode']) && !in_array($this->container['matchMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'matchMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAuthAllowableValues();
                if (!is_null($this->container['auth']) && !in_array($this->container['auth'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'auth', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slDomain']) && (mb_strlen($this->container['slDomain']) > 255)) {
                $invalidProperties[] = "invalid value for 'slDomain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['slDomain']) && (mb_strlen($this->container['slDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'slDomain', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getBackendTypeAllowableValues();
                if (!is_null($this->container['backendType']) && !in_array($this->container['backendType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'backendType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSharditeratorTypeAllowableValues();
                if (!is_null($this->container['sharditeratorType']) && !in_array($this->container['sharditeratorType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sharditeratorType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPollingUnitAllowableValues();
                if (!is_null($this->container['pollingUnit']) && !in_array($this->container['pollingUnit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pollingUnit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['maxFetchBytes']) && ($this->container['maxFetchBytes'] > 4194304)) {
                $invalidProperties[] = "invalid value for 'maxFetchBytes', must be smaller than or equal to 4194304.";
            }
            if (!is_null($this->container['maxFetchBytes']) && ($this->container['maxFetchBytes'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxFetchBytes', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getIsSerialAllowableValues();
                if (!is_null($this->container['isSerial']) && !in_array($this->container['isSerial'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isSerial', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 64)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) > 1024)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['prefix']) && (mb_strlen($this->container['prefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'prefix', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suffix']) && (mb_strlen($this->container['suffix']) > 1024)) {
                $invalidProperties[] = "invalid value for 'suffix', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['suffix']) && (mb_strlen($this->container['suffix']) < 0)) {
                $invalidProperties[] = "invalid value for 'suffix', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 255)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
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
    * @param string|null $name - TIMER触发器：触发器名称 - APIG触发器：API名称 - CTS触发器：通知名称 - OBS触发器：事件通知名称，默认值为触发器id
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets scheduleType
    *  定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    *
    * @return string|null
    */
    public function getScheduleType()
    {
        return $this->container['scheduleType'];
    }

    /**
    * Sets scheduleType
    *
    * @param string|null $scheduleType 定时触发类型（TIMER触发器参数）。TIMER触发器此参数必填 - Rate：指定固定频率（分钟、小时、天数）定期调用函数，单位为分钟时，输入值不能超过60；单位为小时时，输入值不能超过24；单位为天时，输入值不能超过30。 - Cron：指定Cron表达式定期调用函数
    *
    * @return $this
    */
    public function setScheduleType($scheduleType)
    {
        $this->container['scheduleType'] = $scheduleType;
        return $this;
    }

    /**
    * Gets schedule
    *  定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    *
    * @return string|null
    */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
    * Sets schedule
    *
    * @param string|null $schedule 定时触发规则（TIMER触发器参数）。TIMER触发器此参数必填。 - 触发类型为Rate时对应定时规则 - 触发类型为Cron时对应Cron表达式
    *
    * @return $this
    */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;
        return $this;
    }

    /**
    * Gets userEvent
    *  附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    *
    * @return string|null
    */
    public function getUserEvent()
    {
        return $this->container['userEvent'];
    }

    /**
    * Sets userEvent
    *
    * @param string|null $userEvent 附加信息（TIMER触发器参数）。 当Timer触发器触发函数执行时，执行事件（函数的event参数）为： {\"version\": \"v1.0\",   \"time\": \"2018-06-01T08:30:00+08:00\",   \"trigger_type\": \"TIMER\",   \"trigger_name\": \"Timer_001\",   \"user_event\": \"您输入的附加信息\"}
    *
    * @return $this
    */
    public function setUserEvent($userEvent)
    {
        $this->container['userEvent'] = $userEvent;
        return $this;
    }

    /**
    * Gets type
    *  API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type API接口类型（APIG触发器参数）。APIG触发器此参数必填。 - 1：公有API - 2：私有API
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets path
    *  APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path APIG接口PATH路径（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets protocol
    *  API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol API的请求协议（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets reqMethod
    *  API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return string|null
    */
    public function getReqMethod()
    {
        return $this->container['reqMethod'];
    }

    /**
    * Sets reqMethod
    *
    * @param string|null $reqMethod API的请求方式（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setReqMethod($reqMethod)
    {
        $this->container['reqMethod'] = $reqMethod;
        return $this;
    }

    /**
    * Gets groupId
    *  API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId API所属的分组编号（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  API所属的分组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName API所属的分组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets matchMode
    *  API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    *
    * @return string|null
    */
    public function getMatchMode()
    {
        return $this->container['matchMode'];
    }

    /**
    * Sets matchMode
    *
    * @param string|null $matchMode API的匹配方式（APIG触发器参数）。APIG触发器此参数必填。 - SWA：前缀匹配 - NORMAL：正常匹配（绝对匹配）
    *
    * @return $this
    */
    public function setMatchMode($matchMode)
    {
        $this->container['matchMode'] = $matchMode;
        return $this;
    }

    /**
    * Gets envName
    *  API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return string|null
    */
    public function getEnvName()
    {
        return $this->container['envName'];
    }

    /**
    * Sets envName
    *
    * @param string|null $envName API的发布环境（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setEnvName($envName)
    {
        $this->container['envName'] = $envName;
        return $this;
    }

    /**
    * Gets envId
    *  API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return string|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param string|null $envId API的发布环境id（APIG触发器参数）。APIG触发器此参数必填。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets auth
    *  API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    *
    * @return string|null
    */
    public function getAuth()
    {
        return $this->container['auth'];
    }

    /**
    * Sets auth
    *
    * @param string|null $auth API的认证方式（APIG触发器参数）。APIG触发器此参数必填。 - IAM：IAM认证，只允许IAM用户能访问，安全级别中等 - APP：采用Appkey&Appsecret认证，安全级别高，推荐使用 - NONE：无认证模式，所有用户均可访问，不推荐使用
    *
    * @return $this
    */
    public function setAuth($auth)
    {
        $this->container['auth'] = $auth;
        return $this;
    }

    /**
    * Gets funcInfo
    *  funcInfo
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\ApigTriggerFuncInfo|null
    */
    public function getFuncInfo()
    {
        return $this->container['funcInfo'];
    }

    /**
    * Sets funcInfo
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\ApigTriggerFuncInfo|null $funcInfo funcInfo
    *
    * @return $this
    */
    public function setFuncInfo($funcInfo)
    {
        $this->container['funcInfo'] = $funcInfo;
        return $this;
    }

    /**
    * Gets slDomain
    *  APIG系统默认分配的子域名（APIG触发器参数）。
    *
    * @return string|null
    */
    public function getSlDomain()
    {
        return $this->container['slDomain'];
    }

    /**
    * Sets slDomain
    *
    * @param string|null $slDomain APIG系统默认分配的子域名（APIG触发器参数）。
    *
    * @return $this
    */
    public function setSlDomain($slDomain)
    {
        $this->container['slDomain'] = $slDomain;
        return $this;
    }

    /**
    * Gets backendType
    *  API的后端类型（APIG触发器参数）。
    *
    * @return string|null
    */
    public function getBackendType()
    {
        return $this->container['backendType'];
    }

    /**
    * Sets backendType
    *
    * @param string|null $backendType API的后端类型（APIG触发器参数）。
    *
    * @return $this
    */
    public function setBackendType($backendType)
    {
        $this->container['backendType'] = $backendType;
        return $this;
    }

    /**
    * Gets operations
    *  自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    *
    * @return string[]|null
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param string[]|null $operations 自定义操作（CTS触发器参数）。CTS触发器此参数必填。 CTS云审计服务类型和操作订阅所需要的事件通知，当CTS云审计服务获取已订阅的操作记录后，通过CTS触发器将采集到的操作记录作为参数传递来调用FunctionGraph函数。
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id。DDS、KAFKA、RABBITMQ触发器此参数必填。 - APIG触发器：apig实例id - DDS触发器：文档数据库实例id - KAFKA触发器：KAFKA实例id - RABBITMQ触发器：RABBITMQ实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets collectionName
    *  集合名称（DDS触发器参数）。DDS触发器此参数必填。
    *
    * @return string|null
    */
    public function getCollectionName()
    {
        return $this->container['collectionName'];
    }

    /**
    * Sets collectionName
    *
    * @param string|null $collectionName 集合名称（DDS触发器参数）。DDS触发器此参数必填。
    *
    * @return $this
    */
    public function setCollectionName($collectionName)
    {
        $this->container['collectionName'] = $collectionName;
        return $this;
    }

    /**
    * Gets dbName
    *  文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 文档数据库名称（DDS触发器参数）。DDS触发器此参数必填。
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets dbPassword
    *  文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    *
    * @return string|null
    */
    public function getDbPassword()
    {
        return $this->container['dbPassword'];
    }

    /**
    * Sets dbPassword
    *
    * @param string|null $dbPassword 文档数据库密码（DDS触发器参数）。DDS触发器此参数必填。
    *
    * @return $this
    */
    public function setDbPassword($dbPassword)
    {
        $this->container['dbPassword'] = $dbPassword;
        return $this;
    }

    /**
    * Gets batchSize
    *  批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    *
    * @return int|null
    */
    public function getBatchSize()
    {
        return $this->container['batchSize'];
    }

    /**
    * Sets batchSize
    *
    * @param int|null $batchSize 批处理大小，单次函数执行处理的最大数据量。DIS、DDS、KAFKA、RABBITMQ触发器此参数必填。 - DDS触发器：批处理大小设置1-10,000的范围内 - DIS触发器：批处理大小设置1-10,000的范围内 - KAFKA触发器：批处理大小设置1-1,000的范围内 - RABBITMQ触发器：批处理大小设置1-1,000的范围内
    *
    * @return $this
    */
    public function setBatchSize($batchSize)
    {
        $this->container['batchSize'] = $batchSize;
        return $this;
    }

    /**
    * Gets queueId
    *  队列id（DMS触发器参数）。DMS触发器此参数必填。
    *
    * @return string|null
    */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
    * Sets queueId
    *
    * @param string|null $queueId 队列id（DMS触发器参数）。DMS触发器此参数必填。
    *
    * @return $this
    */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;
        return $this;
    }

    /**
    * Gets consumerGroupId
    *  消费组id（DMS触发器参数）。DMS触发器此参数必填。
    *
    * @return string|null
    */
    public function getConsumerGroupId()
    {
        return $this->container['consumerGroupId'];
    }

    /**
    * Sets consumerGroupId
    *
    * @param string|null $consumerGroupId 消费组id（DMS触发器参数）。DMS触发器此参数必填。
    *
    * @return $this
    */
    public function setConsumerGroupId($consumerGroupId)
    {
        $this->container['consumerGroupId'] = $consumerGroupId;
        return $this;
    }

    /**
    * Gets pollingInterval
    *  拉取周期。DIS、DMS触发器此参数必填。
    *
    * @return int|null
    */
    public function getPollingInterval()
    {
        return $this->container['pollingInterval'];
    }

    /**
    * Sets pollingInterval
    *
    * @param int|null $pollingInterval 拉取周期。DIS、DMS触发器此参数必填。
    *
    * @return $this
    */
    public function setPollingInterval($pollingInterval)
    {
        $this->container['pollingInterval'] = $pollingInterval;
        return $this;
    }

    /**
    * Gets streamName
    *  通道名称（DIS触发器参数）。DIS触发器此参数必填。
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 通道名称（DIS触发器参数）。DIS触发器此参数必填。
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets sharditeratorType
    *  起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    *
    * @return string|null
    */
    public function getSharditeratorType()
    {
        return $this->container['sharditeratorType'];
    }

    /**
    * Sets sharditeratorType
    *
    * @param string|null $sharditeratorType 起始位置（DIS触发器参数）。DIS触发器此参数必填。 - TRIM_HORIZON：从最早被存储至分区的有效记录开始读取。 - LATEST：从分区中的最新记录开始读取，此设置可以保证总是读到分区中最新记录。
    *
    * @return $this
    */
    public function setSharditeratorType($sharditeratorType)
    {
        $this->container['sharditeratorType'] = $sharditeratorType;
        return $this;
    }

    /**
    * Gets pollingUnit
    *  拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    *
    * @return string|null
    */
    public function getPollingUnit()
    {
        return $this->container['pollingUnit'];
    }

    /**
    * Sets pollingUnit
    *
    * @param string|null $pollingUnit 拉取周期单位（DIS触发器参数）。DIS触发器此参数必填。 - s：秒 - ms：毫秒
    *
    * @return $this
    */
    public function setPollingUnit($pollingUnit)
    {
        $this->container['pollingUnit'] = $pollingUnit;
        return $this;
    }

    /**
    * Gets maxFetchBytes
    *  最大提取字节数（DIS触发器参数）。
    *
    * @return int|null
    */
    public function getMaxFetchBytes()
    {
        return $this->container['maxFetchBytes'];
    }

    /**
    * Sets maxFetchBytes
    *
    * @param int|null $maxFetchBytes 最大提取字节数（DIS触发器参数）。
    *
    * @return $this
    */
    public function setMaxFetchBytes($maxFetchBytes)
    {
        $this->container['maxFetchBytes'] = $maxFetchBytes;
        return $this;
    }

    /**
    * Gets isSerial
    *  串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    *
    * @return string|null
    */
    public function getIsSerial()
    {
        return $this->container['isSerial'];
    }

    /**
    * Sets isSerial
    *
    * @param string|null $isSerial 串行处理数据（DIS触发器参数），如果开启该选项，取一次数据处理完之后才会取下一次数据；否则只要拉取周期到了就会取数据进行处理。DIS触发器此参数必填。
    *
    * @return $this
    */
    public function setIsSerial($isSerial)
    {
        $this->container['isSerial'] = $isSerial;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组id（LTS触发器参数）。LTS触发器此参数必填。
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组id（LTS触发器参数）。LTS触发器此参数必填。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTopicId
    *  日志流id（LTS触发器参数）。LTS触发器此参数必填。
    *
    * @return string|null
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string|null $logTopicId 日志流id（LTS触发器参数）。LTS触发器此参数必填。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
        return $this;
    }

    /**
    * Gets bucket
    *  桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 桶名称（OBS触发器参数），用作事件源的OBS存储桶，不能和本用户已有桶重名；不能和其他用户已有的桶重名；创建成功后不支持修改。OBS触发器此参数必填。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets prefix
    *  前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    *
    * @return string|null
    */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
    * Sets prefix
    *
    * @param string|null $prefix 前缀（OBS触发器参数），输入一个可选性前缀来限制对以此关键字开头的对象的通知。
    *
    * @return $this
    */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;
        return $this;
    }

    /**
    * Gets suffix
    *  后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    *
    * @return string|null
    */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
    * Sets suffix
    *
    * @param string|null $suffix 后缀（OBS触发器参数），输入一个可选性后缀来限制对以此关键字结尾的对象的通知
    *
    * @return $this
    */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;
        return $this;
    }

    /**
    * Gets events
    *  触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    *
    * @return string[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param string[]|null $events 触发事件（OBS触发器参数）。OBS触发器此参数必填。 - ObjectCreated：表示所有创建对象的操作，包含Put、Post、Copy对象以及合并段 - Put：使用Put方法上传对象 - Post：使用Post方法上传对象 - Copy：使用copy方法复制对象 - CompleteMultipartUpload：表示合并分段任务 - ObjectRemoved：表示删除对象 - Delete：指定对象版本号删除对象 - DeleteMarkerCreated：不指定对象版本号删除对象
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题URN（SMN触发器参数）。SMN触发器此参数必填。
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题URN（SMN触发器参数）。SMN触发器此参数必填。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets topicIds
    *  KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    *
    * @return string[]|null
    */
    public function getTopicIds()
    {
        return $this->container['topicIds'];
    }

    /**
    * Sets topicIds
    *
    * @param string[]|null $topicIds KAFKA主题id列表（KAFKA触发器参数）。KAFKA触发器此参数必填。
    *
    * @return $this
    */
    public function setTopicIds($topicIds)
    {
        $this->container['topicIds'] = $topicIds;
        return $this;
    }

    /**
    * Gets kafkaUser
    *  KAFKA账户名（KAFKA触发器参数）。
    *
    * @return string|null
    */
    public function getKafkaUser()
    {
        return $this->container['kafkaUser'];
    }

    /**
    * Sets kafkaUser
    *
    * @param string|null $kafkaUser KAFKA账户名（KAFKA触发器参数）。
    *
    * @return $this
    */
    public function setKafkaUser($kafkaUser)
    {
        $this->container['kafkaUser'] = $kafkaUser;
        return $this;
    }

    /**
    * Gets kafkaPassword
    *  KAFKA账户密码（KAFKA触发器参数）。
    *
    * @return string|null
    */
    public function getKafkaPassword()
    {
        return $this->container['kafkaPassword'];
    }

    /**
    * Sets kafkaPassword
    *
    * @param string|null $kafkaPassword KAFKA账户密码（KAFKA触发器参数）。
    *
    * @return $this
    */
    public function setKafkaPassword($kafkaPassword)
    {
        $this->container['kafkaPassword'] = $kafkaPassword;
        return $this;
    }

    /**
    * Gets kafkaConnectAddress
    *  KAFKA实例连接IP地址（KAFKA触发器参数）。
    *
    * @return string|null
    */
    public function getKafkaConnectAddress()
    {
        return $this->container['kafkaConnectAddress'];
    }

    /**
    * Sets kafkaConnectAddress
    *
    * @param string|null $kafkaConnectAddress KAFKA实例连接IP地址（KAFKA触发器参数）。
    *
    * @return $this
    */
    public function setKafkaConnectAddress($kafkaConnectAddress)
    {
        $this->container['kafkaConnectAddress'] = $kafkaConnectAddress;
        return $this;
    }

    /**
    * Gets kafkaSslEnable
    *  KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    *
    * @return bool|null
    */
    public function getKafkaSslEnable()
    {
        return $this->container['kafkaSslEnable'];
    }

    /**
    * Sets kafkaSslEnable
    *
    * @param bool|null $kafkaSslEnable KAFKA连接是否开启安全认证（KAFKA触发器参数）。
    *
    * @return $this
    */
    public function setKafkaSslEnable($kafkaSslEnable)
    {
        $this->container['kafkaSslEnable'] = $kafkaSslEnable;
        return $this;
    }

    /**
    * Gets accessPassword
    *  RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    *
    * @return string|null
    */
    public function getAccessPassword()
    {
        return $this->container['accessPassword'];
    }

    /**
    * Sets accessPassword
    *
    * @param string|null $accessPassword RABBITMQ账户密码（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    *
    * @return $this
    */
    public function setAccessPassword($accessPassword)
    {
        $this->container['accessPassword'] = $accessPassword;
        return $this;
    }

    /**
    * Gets accessUser
    *  RABBITMQ账户名（RABBITMQ触发器参数）。
    *
    * @return string|null
    */
    public function getAccessUser()
    {
        return $this->container['accessUser'];
    }

    /**
    * Sets accessUser
    *
    * @param string|null $accessUser RABBITMQ账户名（RABBITMQ触发器参数）。
    *
    * @return $this
    */
    public function setAccessUser($accessUser)
    {
        $this->container['accessUser'] = $accessUser;
        return $this;
    }

    /**
    * Gets connectAddress
    *  实例连接IP地址（RABBITMQ触发器参数）。
    *
    * @return string|null
    */
    public function getConnectAddress()
    {
        return $this->container['connectAddress'];
    }

    /**
    * Sets connectAddress
    *
    * @param string|null $connectAddress 实例连接IP地址（RABBITMQ触发器参数）。
    *
    * @return $this
    */
    public function setConnectAddress($connectAddress)
    {
        $this->container['connectAddress'] = $connectAddress;
        return $this;
    }

    /**
    * Gets exchangeName
    *  交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    *
    * @return string|null
    */
    public function getExchangeName()
    {
        return $this->container['exchangeName'];
    }

    /**
    * Sets exchangeName
    *
    * @param string|null $exchangeName 交换机名称（RABBITMQ触发器参数）。RABBITMQ触发器此参数必填。
    *
    * @return $this
    */
    public function setExchangeName($exchangeName)
    {
        $this->container['exchangeName'] = $exchangeName;
        return $this;
    }

    /**
    * Gets vhost
    *  虚拟机名称（RABBITMQ触发器参数）。
    *
    * @return string|null
    */
    public function getVhost()
    {
        return $this->container['vhost'];
    }

    /**
    * Sets vhost
    *
    * @param string|null $vhost 虚拟机名称（RABBITMQ触发器参数）。
    *
    * @return $this
    */
    public function setVhost($vhost)
    {
        $this->container['vhost'] = $vhost;
        return $this;
    }

    /**
    * Gets sslEnable
    *  RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    *
    * @return bool|null
    */
    public function getSslEnable()
    {
        return $this->container['sslEnable'];
    }

    /**
    * Sets sslEnable
    *
    * @param bool|null $sslEnable RABBITMQ连接是否开启安全认证（RABBITMQ触发器参数）。
    *
    * @return $this
    */
    public function setSslEnable($sslEnable)
    {
        $this->container['sslEnable'] = $sslEnable;
        return $this;
    }

    /**
    * Gets keyEncode
    *  EG obs触发器是否对对象加密。
    *
    * @return bool|null
    */
    public function getKeyEncode()
    {
        return $this->container['keyEncode'];
    }

    /**
    * Sets keyEncode
    *
    * @param bool|null $keyEncode EG obs触发器是否对对象加密。
    *
    * @return $this
    */
    public function setKeyEncode($keyEncode)
    {
        $this->container['keyEncode'] = $keyEncode;
        return $this;
    }

    /**
    * Gets agency
    *  使用的代理
    *
    * @return string|null
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string|null $agency 使用的代理
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets channelName
    *  通道名称
    *
    * @return string|null
    */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
    * Sets channelName
    *
    * @param string|null $channelName 通道名称
    *
    * @return $this
    */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;
        return $this;
    }

    /**
    * Gets sourceName
    *  事件源名称
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 事件源名称
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param \DateTime|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets status
    *  触发器状态
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
    * @param string|null $status 触发器状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets triggerName
    *  触发器名称
    *
    * @return string|null
    */
    public function getTriggerName()
    {
        return $this->container['triggerName'];
    }

    /**
    * Sets triggerName
    *
    * @param string|null $triggerName 触发器名称
    *
    * @return $this
    */
    public function setTriggerName($triggerName)
    {
        $this->container['triggerName'] = $triggerName;
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

