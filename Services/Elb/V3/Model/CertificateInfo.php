<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    * description  **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    * domain  **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    * id  **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    * name  **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    * privateKey  **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * type  **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * expireTime  **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    * commonName  **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    * fingerprint  **参数解释**：证书指纹。  **取值范围**：不涉及
    * subjectAlternativeNames  **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    * source  **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    * protectionReason  **参数解释**：修改保护的原因。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'certificate' => 'string',
            'description' => 'string',
            'domain' => 'string',
            'id' => 'string',
            'name' => 'string',
            'privateKey' => 'string',
            'type' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'expireTime' => 'string',
            'projectId' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string',
            'scmCertificateId' => 'string',
            'commonName' => 'string',
            'fingerprint' => 'string',
            'subjectAlternativeNames' => 'string[]',
            'source' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    * description  **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    * domain  **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    * id  **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    * name  **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    * privateKey  **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * type  **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * expireTime  **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    * commonName  **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    * fingerprint  **参数解释**：证书指纹。  **取值范围**：不涉及
    * subjectAlternativeNames  **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    * source  **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    * protectionReason  **参数解释**：修改保护的原因。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'certificate' => null,
        'description' => null,
        'domain' => null,
        'id' => null,
        'name' => null,
        'privateKey' => null,
        'type' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'expireTime' => null,
        'projectId' => null,
        'encCertificate' => null,
        'encPrivateKey' => null,
        'scmCertificateId' => null,
        'commonName' => null,
        'fingerprint' => null,
        'subjectAlternativeNames' => null,
        'source' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'enterpriseProjectId' => null
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
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    * description  **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    * domain  **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    * id  **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    * name  **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    * privateKey  **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * type  **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * expireTime  **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    * commonName  **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    * fingerprint  **参数解释**：证书指纹。  **取值范围**：不涉及
    * subjectAlternativeNames  **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    * source  **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    * protectionReason  **参数解释**：修改保护的原因。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'certificate' => 'certificate',
            'description' => 'description',
            'domain' => 'domain',
            'id' => 'id',
            'name' => 'name',
            'privateKey' => 'private_key',
            'type' => 'type',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'expireTime' => 'expire_time',
            'projectId' => 'project_id',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key',
            'scmCertificateId' => 'scm_certificate_id',
            'commonName' => 'common_name',
            'fingerprint' => 'fingerprint',
            'subjectAlternativeNames' => 'subject_alternative_names',
            'source' => 'source',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    * description  **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    * domain  **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    * id  **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    * name  **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    * privateKey  **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * type  **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * expireTime  **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    * commonName  **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    * fingerprint  **参数解释**：证书指纹。  **取值范围**：不涉及
    * subjectAlternativeNames  **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    * source  **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    * protectionReason  **参数解释**：修改保护的原因。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'certificate' => 'setCertificate',
            'description' => 'setDescription',
            'domain' => 'setDomain',
            'id' => 'setId',
            'name' => 'setName',
            'privateKey' => 'setPrivateKey',
            'type' => 'setType',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'expireTime' => 'setExpireTime',
            'projectId' => 'setProjectId',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey',
            'scmCertificateId' => 'setScmCertificateId',
            'commonName' => 'setCommonName',
            'fingerprint' => 'setFingerprint',
            'subjectAlternativeNames' => 'setSubjectAlternativeNames',
            'source' => 'setSource',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    * certificate  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    * description  **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    * domain  **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    * id  **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    * name  **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    * privateKey  **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * type  **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    * createdAt  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * updatedAt  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * expireTime  **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    * encCertificate  **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    * encPrivateKey  **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    * scmCertificateId  **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    * commonName  **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    * fingerprint  **参数解释**：证书指纹。  **取值范围**：不涉及
    * subjectAlternativeNames  **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    * source  **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    * protectionStatus  **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    * protectionReason  **参数解释**：修改保护的原因。  **取值范围**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'certificate' => 'getCertificate',
            'description' => 'getDescription',
            'domain' => 'getDomain',
            'id' => 'getId',
            'name' => 'getName',
            'privateKey' => 'getPrivateKey',
            'type' => 'getType',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'expireTime' => 'getExpireTime',
            'projectId' => 'getProjectId',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey',
            'scmCertificateId' => 'getScmCertificateId',
            'commonName' => 'getCommonName',
            'fingerprint' => 'getFingerprint',
            'subjectAlternativeNames' => 'getSubjectAlternativeNames',
            'source' => 'getSource',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
        $this->container['scmCertificateId'] = isset($data['scmCertificateId']) ? $data['scmCertificateId'] : null;
        $this->container['commonName'] = isset($data['commonName']) ? $data['commonName'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['subjectAlternativeNames'] = isset($data['subjectAlternativeNames']) ? $data['subjectAlternativeNames'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 10000)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets adminStateUp
    *  **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp **参数解释**：证书的管理状态。该字段当前无用，设置为true或者false都不影响证书使用。  **取值范围**： - true：表示证书可用。 - false：表示证书不可用。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets certificate
    *  **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    *
    * @return string
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string $certificate **参数解释**：证书内容。支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式，最大长度65536个字符。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释**：证书的描述。  **取值范围**：0-255个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domain
    *  **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain **参数解释**：服务器证书所签域名。  **取值范围**：总长度为0-10000，由若干普通域名或泛域名组成，域名之间以\",\"分隔，不超过100个域名。 - 普通域名：由若干字符串组成，字符串间以\".\"分隔，单个字符串长度不超过63个字符，只能包含英文字母、数字或\"-\"，且必须以字母或数字开头和结尾。例：www.test.com。 - 泛域名：在普通域名的基础上仅允许首字母为\"\\*\"。例：\\*.test.com。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：ELB证书管理对象ID。  **取值范围**：由32位数字和小写字母组成。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：证书的名称。  **取值范围**：0-255个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets privateKey
    *  **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    *
    * @return string
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string $privateKey **参数解释**：服务器证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type **参数解释**：证书的类型。  **取值范围**： - server：服务器证书。 - client：CA证书。 - server_sm：服务器SM双证书。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt **参数解释**：创建时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt **参数解释**：更新时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets expireTime
    *  **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    *
    * @return string
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string $expireTime **参数解释**：证书有效期的截止时间。  **取值范围**：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **取值范围**：长度为32个字符，由小写字母和数字组成。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets encCertificate
    *  **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate **参数解释**：服务器SM双证书的证书内容。 支持最大11层证书链(含证书和证书链)。  **取值范围**：PEM编码格式。最大长度65536字符。
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey **参数解释**：服务器SM双证书的私钥。  **取值范围**：PEM编码格式，最大长度8192个字符。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
        return $this;
    }

    /**
    * Gets scmCertificateId
    *  **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getScmCertificateId()
    {
        return $this->container['scmCertificateId'];
    }

    /**
    * Sets scmCertificateId
    *
    * @param string|null $scmCertificateId **参数解释**：云证书与管理服务（CCM）中的证书ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setScmCertificateId($scmCertificateId)
    {
        $this->container['scmCertificateId'] = $scmCertificateId;
        return $this;
    }

    /**
    * Gets commonName
    *  **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getCommonName()
    {
        return $this->container['commonName'];
    }

    /**
    * Sets commonName
    *
    * @param string|null $commonName **参数解释**：证书绑定的主域名。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setCommonName($commonName)
    {
        $this->container['commonName'] = $commonName;
        return $this;
    }

    /**
    * Gets fingerprint
    *  **参数解释**：证书指纹。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint **参数解释**：证书指纹。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets subjectAlternativeNames
    *  **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    *
    * @return string[]|null
    */
    public function getSubjectAlternativeNames()
    {
        return $this->container['subjectAlternativeNames'];
    }

    /**
    * Sets subjectAlternativeNames
    *
    * @param string[]|null $subjectAlternativeNames **参数解释**：证书绑定的域名列表。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setSubjectAlternativeNames($subjectAlternativeNames)
    {
        $this->container['subjectAlternativeNames'] = $subjectAlternativeNames;
        return $this;
    }

    /**
    * Gets source
    *  **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source **参数解释**：标记当前证书来源。  **取值范围**： - scm：表示关联云证书与管理服务（CCM）中的证书。 - 空值：表示自有证书。
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus **参数解释**：修改保护状态。  **取值范围**：  - nonProtection: 不保护 - consoleProtection: 控制台修改保护，即禁止通过控制台修改。
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  **参数解释**：修改保护的原因。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason **参数解释**：修改保护的原因。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    * @param string|null $enterpriseProjectId **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

